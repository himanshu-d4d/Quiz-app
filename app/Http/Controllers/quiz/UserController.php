<?php

namespace App\Http\Controllers\quiz;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\admin\Category;
use App\Models\admin\Question;
use App\Models\admin\Snippet;
use App\Models\admin\Report;
use Storage;
use DB;
use Session;
use Redirect;
use PDF;
use File;
use Mail;
use Hash;
use Auth;
use View;

class UserController extends Controller
{
    public function userLogin(){
        try{
             return view('quiz-app.layouts.login');
        }catch(Exception $e){
            echo $e->getMessage();
          } 
    }
    public function userSignUp(){
        try{
             return view('quiz-app.layouts.signup');
        }catch(Exception $e){
            echo $e->getMessage();
          } 
    }
    public function storeSignUp(Request $request){
        // $validated = $request->validate([
        //     'name' => 'required',
        //     'password' => 'required',
        //    'c_password' => 'required|same:password', 
        // ]);
        try{
         
             $data = $request->all();
             if(!User::where('name',$data['name'])->where('email',$data['email'])->first()){
                //dd($data);
                $userData = new User;
                $userData['name'] = $data['name'];
                $userData['email'] = $data['email'];
                $userData['password'] = Hash::make($data['name']); 
                $userData->save();
                return redirect('user/login')->with('success',"Your account created successfully !");; 
             }else{
               return redirect('user/login')->with('error',"Your account already exists: Please login");
             }
            
        }catch(Exception $e){
            echo $e->getMessage();
          } 
    }
    public function loginAttempt(Request $request){
        try{
            $data = $request->all();
            $credentials = [
              'email'=>$data['email'],
              'password'=>$data['password'],
          ];
          if(Auth::attempt($credentials)){
            return redirect('main-section');
          }
          
            return redirect('user/login')->with('error',"please enter correct email or password");
        }catch(Exception $e){
            echo $e->getMessage();
          } 
    }
    public function mainSection(){
        try{
           if (Auth::check()) {
               $category =Category::where('cat_sequence_no',1)->first();
               //dd($category);
                return view('quiz-app.pages.category')->with(compact('category'));
           }
            return redirect('user/login');
        }catch(Exception $e){
            echo $e->getMessage();
          } 
    }
    public function logout(){
        try{
            Auth::logout();
             //dd($admin);
             return redirect('user/login');
        }catch(Exception $e){
        echo $e->getMessage();
      } 
    }
    public function question($id){
        try{
            if (Auth::check()) {
              if($id == 1){
                $question = DB::table('questions')
                ->select('categories.cat_first_word','categories.cat_remaining_word','questions.*') 
                ->join('categories','categories.cat_sequence_no','=','questions.category_order')
                ->where('categories.cat_sequence_no',$id)
                ->where('questions.queston_no',1)
                ->first();
                //dd($question);
                $answers = DB::table('answers')
                ->select('answers.*')
                ->join('questions','questions.queston_no','=','answers.question_order')
                ->where('questions.queston_no',$question->queston_no)
                ->get();
                //dd($answers['answers']);
               return view('quiz-app.pages.question')->with(compact('question','answers'));
              }else{
                $questionData = Question::where('category_order',$id)->select('queston_no')->get();
                 $question_order = array_merge($questionData->toArray());
                //dd($question_order);
                $question = DB::table('questions')
                ->select('categories.cat_first_word','categories.cat_remaining_word','questions.*') 
                ->join('categories','categories.cat_sequence_no','=','questions.category_order')
                ->where('categories.cat_sequence_no',$id)
                ->where(min($question_order))
                ->first();
               
                $answers = DB::table('answers')
                ->select('answers.*')
                ->join('questions','questions.queston_no','=','answers.question_order')
                ->where('questions.queston_no',$question->queston_no)
                ->get();
                //dd($answers['answers']);
               return view('quiz-app.pages.question')->with(compact('question','answers'));
              }
               
             
            }
            return redirect('user/login');
        }catch(Exception $e){
        echo $e->getMessage();
      } 
    }
    public function submitAnswer(Request $request){
        try{
            if (Auth::check()) {
                $data = $request->all();
               //dd($data);
                $answers = str_replace(["\r\n", "\n", "\r",], "", $data['answer']);
                $questions = str_replace(["\r\n", "\n", "\r",], "", $data['question']);
                //dd($content);
                 $snippets = Snippet::where('snippets_no',$data['snippets_no'])->select('snippets_text')->first();
                // dd($snippets['snippets_text']);
                Session::push('total',['answer'=>$answers,'answer_type'=>$data['answer_type'],'snippets_text'=>$snippets['snippets_text'],
                'category'=>$data['category_name'],'question'=>$questions,'question_no'=>$data['question_no'],'answer_order'=>$data['answer_order']],);
                //$returnData = ["question_no"=>$data['question_no']];
               if($question_no = $data['question_no'] + 1){
                 if(Question::where('queston_no',$question_no)->where('category_order',$data['category_order'])->first()){
                  return redirect('next-question/'.$question_no);
                 }else {
                  return redirect('next-category/'.$data['category_order']);
                
                  }
               }
               
                
            }
            return redirect('user/login');
             //dd($admin);
        }catch(Exception $e){
        echo $e->getMessage();
      } 
    }
     public function NextQuestion($id){
        try{
          if (Auth::check()) {
             $question = DB::table('questions')
    ->select('categories.cat_first_word','categories.cat_remaining_word','questions.*')
    ->join('categories','categories.cat_sequence_no','=','questions.category_order')
    ->where('questions.queston_no',$id)
    ->first();
    $answers = DB::table('answers')
    ->select('answers.*')
    ->join('questions','questions.queston_no','=','answers.question_order')
    ->where('questions.queston_no',$id)
    ->get();
    //dd($answers);
     return view('quiz-app.pages.question')->with(compact('question','answers')); 
       } 
       return redirect('user/login');     
        }catch(Exception $e){
        echo $e->getMessage();
      } 
    }

    public function nextCategory($id){
        try{
          if (Auth::check()) {
           if($cat_order = $id +1 ){
            if(Category::where('cat_sequence_no',$cat_order)->first()){
              $category = Category::where('cat_sequence_no',$cat_order)->first();
              //dd($category);
              return view('quiz-app.pages.category')->with(compact('category'));
            }else{
              return redirect('finish');
            
           }
           }
          }
          return redirect('user/login');
        }catch(Exception $e){
        echo $e->getMessage();
      } 
    }
    public function finish(){
      try{
        if (Auth::check()) {
          return view('quiz-app.pages.submit');
        }
        return redirect('user/login');
      }catch(Exception $e){
      echo $e->getMessage();
    } 
  }

// public function createPDF() {
//   set_time_limit(0);
//   if (Auth::check()) {
//   $user = Auth::user();
//  $users = User::where('id',$user->id)->first();
//  //dd($users['id']);
//   $data = Session::all();
//   $allData = $data['total'];
//   $filename = time();
//   //dd($filename);
//   $path = storage_path('pdf');
//       $pdf = PDF::loadView('pdf_view', compact("allData"))->setPaper('a4', 'landscape')->save(''.$path.'/'.$filename.'.pdf');
     
//  /////////////user data save in table////////////////////////////////
//            $userData = new Report;
//            $userData['user_id'] = $users['id'];
//            $userData['user_name'] = $users['name'];
//            $userData['pdf'] = $filename;
//            $userData['date'] = date("y-m-d");
//            $userData->save();
//            session()->forget('total');         
//            return redirect('user/login');
//   }
//   return redirect('user/login');
// }
  
public function viewPdf(){
  try{
    set_time_limit(0);
    $user = loginUser();
    //dd($user->email);
    if (Auth::check()) {
    $data = Session::all();
    //$this-> answerscore($data);
    if(Session::get('total')==0){
      return redirect('user/login');
    }
    $filename = time();
    $path = storage_path('pdf');
    $allData = $data['total'];
    //dd($allData);
    $pdfAttachment = public_path() . '/' .'reserved/new_2.pdf';
    $fillablePdf = public_path().'/'.'reserved/fillable_pdf.pdf';
    // dd($pdfAttachment);

////////////////////////////////////////////////////////////////////////////////////////////////

    $pdf = PDF::loadView('pdf_view', compact("allData"))->setPaper('a4', 'landscape')->save(''.$path.'/'.$filename.'.pdf');  
    // dd($pdf->output());
    
    Mail::send('mail',$allData,function($messages) use($user,$pdfAttachment,$filename, $pdf, $fillablePdf){
      $messages->to("himanshu.d4d@gmail.com")
      ->subject("Traceability Chooser")
      ->attachData($pdf->output(),$filename.'.pdf')
      ->attach($pdfAttachment, array('as' => 'pdf-report.pdf', 'mime' => 'application/pdf'))
      ->attach($fillablePdf, array('as' => 'pdf-fillable.pdf', 'mime' => 'application/pdf'));
     });
     $userData = new Report;
     $userData['user_id'] = $user->id;
     $userData['user_name'] = $user->name;
     $userData['pdf'] = $filename;
     $userData['answer_data'] = json_encode($allData);
     $userData['date'] = date("y-m-d");
     $userData->save();
     session()->forget('total'); 
     session()->forget('answerScoreList');           
      return view('quiz-app.pages.thanku')->with(compact('allData'));
      
  }
  return redirect('user/login');
  }catch(Exception $e){
  echo $e->getMessage();
  }
 

 }
    public function reports(){
      try{
        if (Auth::check()) {
          $user = Auth::user();
          //dd( $user->id);
          $reports = Report::where('user_id',$user->id)->get();
          return view('quiz-app.pages.report')->with(compact('reports'));
        } 
      }catch(Exception $e){
  echo $e->getMessage();
  }
    }
    public function downloadPdf($filename){
      //dd($filename);
      $path = storage_path('pdf');
      if(!file_exists(''.$path.'/'.$filename.'.pdf')){
          die('file not found');
      }else {
        //Storage::download(''.$path.'/'.$filename.'.pdf');

        return response()->download(''.$path.'/'.$filename.'.pdf');
        //return Storage::download(''.$path.'/'.$filename.'.pdf');


          //return $pdf->download(''.$filename.'.pdf');
      }
  }
//  public function access(Request $request){
//      $all=$request->session()->all();
//      dd($all);
//  //$request->session()->flash('answerScoreList');

//  }
   
}
