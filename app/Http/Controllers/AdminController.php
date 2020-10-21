<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\User;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('post')){
            $data = $request->input();
            if (Auth::attempt(['email'=>$data['email'], 'password'=>$data['password'], 'admin'=>'1'])){
                //echo "Success";
                //die();
                return redirect('/admin/dashboard');
            }else{
                //echo "Failed";
                //die();
                return redirect('/admin')->with('flash_message_error', 'Invalid Email or Password');
            }
        }
        return view('admin.admin_login');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function logout()
    {
        Session::flush();
        return redirect('/admin')->with('flash_message_success', 'Logged Out');
    }

    public function settings()
    {
        return view('admin.settings');
    }

    public function update_pass(Request $request)
    {
        if ($request->isMethod('post')){
            $data = $request->all();
            $check_pass = User::where(['email'=>Auth::user()->email])->first();

            $current_pass = $data['current_pwd'];
            if (Hash::check($current_pass, $check_pass->password)){

                $password = bcrypt($data['new_pwd']);

                $user = Auth::user();
                $user->update(['password'=>$password]);
                return redirect('/admin/settings')->with('flash_message_success', 'password Updated Successfully');
            }else{
                return redirect('/admin/settings')->with('flash_message_error', 'Something Went Wrong');
            }
            /*if (!(Hash::check($request->get('current_pwd'), Auth::user()->password))){
                return redirect()->back()->with('flash_message_error', 'Something Went Wrong');
            }

            if (strcmp($request->get('current_pwd'), $request->get('new_pwd')) == 0){
                return redirect()->back()->with('flash_message_error', 'Current and Previous Password CAN NOT be same!!');
            }
            $request->validate([
               'current_pwd' =>'required',
                'new_pwd' => 'required|string|min:6|confirmed',
            ]);
            $user = Auth::user();
            $user->password = bcrypt($request->get('new_pwd'));
            $user->save();
            return redirect('/admin/settings')->with('flash_message_success', 'Password Updated Successfully');
            */
        }
    }
}
