<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
       $users = User::query()->get();
        return view('users.index',compact('users'));
    }
    public function detail(){
        $users = User::query()->first();
        return view('users.detail',compact('users'));
    }
}
