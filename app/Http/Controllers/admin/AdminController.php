<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Exception;
use App\Models\admin\Admin;
use Auth;

class AdminController extends Controller 
{
    public function dashboard(){
      try{
          if(Auth::check()){
            return view('admin.dashboard.index');
          }
          return redirect('/admin');
      }catch(Exception $e){
        echo $e->getMessage();
      } 
    }
    public function login(){
        return view('admin.layouts.login');
    }
    public function loginAttempt(Request $request){
        try{
            $data = $request->all();
            $credentials = [
                'email'=>$data['email'],
                'password'=>$data['password'],
            ];
            //dd($credentials);    
             if(Auth::guard('admin')->attempt($credentials)){
                return redirect('admin/dashboard');
                //echo "hello";
             }
             return redirect('/admin')->with('error', 'Email Or password incorrect');
             
        }catch(Exception $e){
            return redirect('admin')->with('error',$e->getMessage());
        }
    }
    public function editProfile(){
        try{
            $admin = Auth::user();
            //dd($data);
             return view('admin.profile.edit_profile')->with(compact('admin'));
        }catch(Exception $e){
            return redirect('admin')->with('error',$e->getMessage());
        }
    }
    public function updateProfile(Request $request){
        try{
            $data = $request->all();
            //dd($data);
            Admin::where('id', $data['id'])->update(['name'=>$data['name'], 'email'=>$data['email']]);
            Alert::success('Updated', 'Profile Update Successfully !!');
             return redirect('admin/edit-profile');
        }catch(Exception $e){
            return redirect('admin')->with('error',$e->getMessage());
        }
    }
    public function passwordReset(){
        try{
            return view('admin/profile.password_reset');
            // $data = $request->all();
            // if (\Hash::check($request->old_password , $admin['password'] ))
        }catch(Exception $e){
        echo $e->getMessage();
      } 
    }
    public function passwordUpdate(Request $request){
        $admin = Auth::user();
        //dd($admin);
        $validated = $request->validate([
            'old_password' => 'required',
            'password' => 'required',
           'c_password' => 'required|same:password', 
        ]);
        try{
            
             $data = $request->all();
             //dd($data);
             if (\Hash::check( $data['old_password'] , $admin['password'] )){
                $newpassword = bcrypt($data['password']); 
                //dd($newpassword);
             $result = Admin::where('id',$admin['id'])
                    ->update(['password'=>$newpassword]);
                    Alert::success('Updated', 'Password Update Successfully !!');
                    return redirect('admin/password-reset');
          }else{
            return redirect('admin/password-reset')->with("error", "Old Password does not match");
          }
             
        }catch(Exception $e){
        echo $e->getMessage();
      } 
    }
    public function logout(){
        try{
            Auth::logout();
             //dd($admin);
             return redirect('admin');
        }catch(Exception $e){
        echo $e->getMessage();
      } 
    }
}
