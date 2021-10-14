<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Question;
use App\Models\admin\Answer;
use App\Models\admin\Snippet;
use RealRashid\SweetAlert\Facades\Alert;
use Exception;
use DB;

class AnswerController extends Controller
{
    public function addAnswer($id){
        try{
            $question= Question::find($id);
            $snippets = Snippet::all();
             return view('admin.answers.add_answer')->with(compact('question','snippets'));

        }catch(Exception $e){
            echo $e->getMessage();
          } 
    }
    public function storeAnswer(Request $request){
        try{
            $data = $request->all();
           //dd($data);
            
            // $answers =[];
        foreach($data['answers'] as $x=>$val){
            //dd($snippets);
            $answers['snippets_no'] = $request->snippets_no[$x];
            $answers['question_id'] = $request->question; 
            $answers['answers'] = $val; 
            //dd($answers);
            $result = Answer::Create($answers,);
             }
        }catch(Exception $e){
            echo $e->getMessage();
          } 
    }
    public function viewAnswer($id){
        try{
             $answers = DB::table('answers')
             ->select('questions.question','answers.*')
             ->join('questions', 'answers.question_id','=', 'questions.id')
             ->where('questions.id',$id)
             ->paginate(5);
             //dd($answers);
             return view('admin.answers.view_answers')->with(compact('answers'));
        }catch(Exception $e){
            echo $e->getMessage();
          }
    }
    public function editAnswer($id){
        try{ 
             $snippets = Snippet::all();
            $answersData = Answer::find($id);
            $question= Question::where('id',$answersData['question_id'])->first();
            //dd($question);
             return view('admin.answers.edit_answers')->with(compact('question','snippets','answersData'));

        }catch(Exception $e){
            echo $e->getMessage();
          } 
    }
    public function updateAnswer(Request $request){
        try{ 
             $answers = $request->all();
             //dd($answers);
              Answer::where('id',$answers['id'])
              ->update(['snippets_no'=>$answers['snippets_no'],'answers'=>$answers['answers']]);
              Alert::success('Updated', 'Answer Update Successfully !!');
              return redirect('/admin/view-answers/'. $answers['question']);
        }catch(Exception $e){
            echo $e->getMessage();
          } 
    }
    public function deleteAnswer($id){
        try{ 
             $answer = Answer::find($id);
             $answer->delete();
              Alert::success('Deleted', 'Answer Delete Successfully !!');
              return redirect()->back();
        }catch(Exception $e){
            echo $e->getMessage();
          } 
    }
        
}
