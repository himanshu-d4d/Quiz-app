<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Category;
use App\Models\admin\Question;
use RealRashid\SweetAlert\Facades\Alert;
use Exception;
use DB;

class QuestionController extends Controller
{
    public function addQuestion(){
        try{
            $categories = Category::all();
            //dd($category);
             return view('admin.question.add_question')->with(compact('categories'));
        }catch(Exception $e){
        echo $e->getMessage();
      } 
    }
    public function storeQuestion(Request $request){
      try{
           $data = $request->all();
           //dd($data);
           $question = new Question;
                $question['category_order'] = $data['category_sequence'];
                $question['question'] = $data['question'];
                $question['queston_no'] = $data['question_sequence'];
                $question['answer_type'] = $data['answer_type'];
                $question['background_color'] = $data['color'];
                // dd($data['answers']);
                 //dd($question);
                 $question->save();
                 Alert::success('Added', 'Question Create Successfully !!');
          //dd($category);
           return redirect('admin/view-question');
      }catch(Exception $e){
      echo $e->getMessage();
    } 
  }
    public function QuestionList(){
       try{
            $questionData = DB::table('questions')
            ->select('categories.cat_first_word','categories.cat_remaining_word','questions.*')
            ->join('categories', 'categories.cat_sequence_no','=','questions.category_order')
            ->paginate('10');
            //dd($questionData);
            return view('admin.question.question_list')->with(compact('questionData'));
         }catch(Exception $e){
         echo $e->getMessage();
    } 
  }
  public function editQuestion($id){
    try{
     // dd($id);
         $questionData = Question::find($id);
         //dd($questionData);
         $categories = Category::where('cat_sequence_no',$questionData['category_order'])->first();
         return view('admin.question.edit_question')->with(compact('questionData','categories'));
      }catch(Exception $e){
      echo $e->getMessage();
 } 
}
  public function updateQuestion(Request $request){
    try{
        
        $questionData =$request->all();
        //dd($questionData);
        Question::where('id',$questionData['id'])
        ->update(['queston_no'=>$questionData['question_sequence'],'category_order'=>$questionData['category'],
        'question'=>$questionData['question'],'answer_type'=>$questionData['answer_type'],
        'background_color'=>$questionData['color']]);
        Alert::success('Updated', 'Question update Successfully !!');
        return redirect('admin/view-question');
      }catch(Exception $e){
      echo $e->getMessage();
  } 
  }
  public function deleteQuestion($id){
    try{
      $questionOrder = Question::find($id);
      //dd($questionOrder);
        $questionData = DB::table('questions')
        ->join('answers', 'answers.question_order','questions.queston_no')
        ->where('questions.queston_no',$questionOrder['queston_no'])
        ->delete();
        dd($questionData);
        $data = [];
        foreach($questionData as $key=>$value){
           $data = $value;
        }
        $data->delete();
          return redirect('admin/view-question');
    }catch(Exception $e){
      echo $e->getMessage();
 } 
  }
}
