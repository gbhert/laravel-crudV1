<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
class MainController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }
    public function save(Request $request){
        
        //validate request
        $request->validate([
            'name'  =>  'required',
            'email' =>  'required|email|unique:admins',
            'password'  => 'required|min:5|max:20'
        ]);

        $admin = new Admin;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $save = $admin->save();

        if($save){
            return back()->with('success','New Admin created and added to the database.');
        }else{
            return back()->with('fail','Something went wrong try again.');
        }   
    }
    public function check_credentials(Request $request){
        $request->validate([
            'email'     =>  'required|email',
            'password'  =>  'required|min:5|max:20'
        ]);

        $admin_info = Admin::where('email','=',$request->email)->first();
        
       
        if(!$admin_info){
            return back()->with('fail','The email is not recognized.');
        }else{
            if(Hash::check($request->password , $admin_info->password)){
                $request->session()->put('AdminLogged', $admin_info->id);
                return redirect('admin/dashboard');
            }else{
                
                return back()->with('fail','Incorrect password');
            }

        }
    }
    public function admin_logout(){
        if(session()->has('AdminLogged')){
            session()->pull('AdminLogged');
            return redirect('/auth/login');
        }
    }

    public function dashboard(){
        $data = ['AdminLoggedInfo'=>Admin::where('id','=', session('AdminLogged'))->first()];
        return view('admin.dashboard',$data);
    }
}
