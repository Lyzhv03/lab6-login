<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }
    public function register(){
        return view('register');
    }

    //Login
    public function postLogin(Request $request){
        $data = $request->only(['email','password']);
        //Kiem tra dang nhap
        if(Auth::attempt($data)){//ktra xem co trùng email,pass tren db ko
            return redirect()->route('admin.index');//dang nhap thanh cong
        } else{
            return redirect()->back()->with('errorLogin','Email hoặc Password không đúng !!!');
        }

    }
    //Register
    public function postRegister(Request $request){
        $data = $request->except('avatar');
        $data['avatar'] = '';
        if($request->hasFile('avatar')){
            $path_image = $request->file('avatar')->store('images');
            $data['avatar'] = $path_image;
        }
        // $data = $requesavatart->validate([
        //     'fullname' => ['required'],
        //     'username' => ['required','unique:users'],
        //     'email'    => ['required','email','unique:users'],
        //     'password' => ['required','min:3','max:50']
        // ]);
        User::query()->create($data);
        return redirect()->route('login')->with('message','Register successfully !');
    }

    //Logout
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
