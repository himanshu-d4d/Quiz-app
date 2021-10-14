<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Snippet;
use RealRashid\SweetAlert\Facades\Alert;
use Exception;

class SnippetsController extends Controller
{
    public function addSnippets(){
        try{
            return view('admin.snippets.add_snippets');
        }catch(Exception $e){
         echo $e->getMessage();
    } 
}
    public function storeSnippets(Request $request){
        try{
            $data = $request->all();
             $snippets = new Snippet;
             $snippets['snippets_no'] = $data['snippets_no'];
             $snippets['snippets_text'] = $data['snippets_text'];
             $snippets->save();
             Alert::success('Added', 'Snippets Add Successfully !!');
            return redirect('admin/view-snippets');
        }catch(Exception $e){
         echo $e->getMessage();
    } 
}
    public function viewSnippets(){
        try{
            $snippet = Snippet::paginate('10');
            return view('admin.snippets.view_snippets')->with(compact('snippet'));
        }catch(Exception $e){
         echo $e->getMessage();
    } 
}
   public function editSnippets($id){
      try{
            $snippet = Snippet::find($id);
            //dd($snippet);
            return view('admin.snippets.edit_snippets')->with(compact('snippet'));
       }catch(Exception $e){
        echo $e->getMessage();
      } 
   }
   public function updateSnippets(Request $request){
    try{
          $snippet = $request->all();
          //dd($snippet);
           $resulr = Snippet::where('id',$snippet['id'])
           ->update(['snippets_no'=>$snippet['snippets_no'],'snippets_text'=>$snippet['snippets_text']]);
          Alert::success('Update', 'Snippets Update Successfully !!');
          return redirect('admin/view-snippets');
     }catch(Exception $e){
      echo $e->getMessage();
    } 
 }
   public function deleteSnippets($id){
     try{
         $snippets = Snippet::find($id);
           //dd($snippets);
           $snippets->delete();
          Alert::success('Deleted', 'Snippets Delete Successfully !!');
          return redirect('admin/view-snippets');
     }catch(Exception $e){
      echo $e->getMessage();
    } 
 }
}
