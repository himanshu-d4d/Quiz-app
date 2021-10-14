<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Category;
use RealRashid\SweetAlert\Facades\Alert;
use Exception;
use File;

class CategoryController extends Controller
{
    public function addCategory(){
        try{ 
             return view('admin.category.add_category');
        }catch(Exception $e){
          return redirect()->back()->with('error',$e->getMessage());
      }
    }
    public function storeCategory(Request $request){
        try{ 
            $data = $request->all();
            if($image = $request->file('image')){
              $imageName = time().'.'.$image->extension();
              $image->move(public_path('upload/images'), $imageName); 
            }else{
              $imageName = "";
            }
            //dd($data);
            $category = new Category;
              $category['cat_first_word'] = $data['cat_first_word'];
              $category['cat_remaining_word'] = $data['cat_remaining_word'];
              $category['cat_sequence_no'] = $data['cat_sequence_no'];
              $category['cat_description'] = $data['cat_description'];
              $category['bg_image'] = $imageName;
             $category->save();
             Alert::success('Added', 'Category Create Successfully !!');
             return redirect('admin/view-category');
        }catch(Exception $e){
          echo $e->getMessage();
      }
    }
    public function viewCategory(){
      try{
          $categories = Category::paginate('10');
           return view('admin.category.view_category')->with(compact('categories'));
      }catch(Exception $e){
          return redirect('admin.dashboard')->with('error',$e->getMessage());
      }
    }
    public function editCategory($id){
      try{
          $category = Category::find($id);
          //dd($category);
           return view('admin.category.edit_category')->with(compact('category'));
      }catch(Exception $e){
          return redirect('admin.dashboard')->with('error',$e->getMessage());
      }
    }
    public function updateCategory(Request $request){
      try{
          $category = $request->all();
          //dd($category);
          if($image = $request->file('image')){
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('upload/images'), $imageName); 
            File::delete(public_path("upload/images/$category[old_image]"));
          }else{
            $imageName = $category["old_image"];
          }
            Category::where('id',$category['id'])
            ->update(["cat_first_word"=>$category["cat_first_word"],"cat_remaining_word"=>$category["cat_remaining_word"],
            "cat_sequence_no"=>$category["cat_sequence_no"],"cat_description"=>$category["cat_description"],"bg_image"=>$imageName]);
            Alert::success('Updated', 'Category Update Successfully !!');
           return redirect('admin/view-category');
      }catch(Exception $e){
        echo $e->getMessage();
      }
    }
    public function updateStatus(Request $request, $id=null){
         try{
           //dd($id);
              $status = $request->all();
              //dd($status);
                Category::where('id',$status['id'])->update(['status'=>$status['status']]);
         }catch(Exception $e){
        echo $e->getMessage();
      } 
    }
    public function deleteCategory($id){
       try{
           $category = Category::find($id);
           //dd($category);
           if($category['bg_image']){
            File::delete(public_path("upload/images/$category[bg_image]"));
           }
           $category->delete();
           Alert::success('Deleted', 'Category Delete Successfully !!');
           return redirect('admin/view-category');
       }catch(Exception $e){
        echo $e->getMessage();
      } 
    }
}
