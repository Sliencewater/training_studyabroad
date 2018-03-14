<?php

namespace App\Http\Controllers\Admin;

use App\Models\AdminModel;
use App\Models\TestModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //
    public function login()
    {
//        return "hello";
        return view('admin.login');
    }

    public function checkLogin(Request $request)
    {
        $username=$request->input("username");
        $password=$request->input("password");

        //调用Model检查账号密码
        $result=AdminModel::check($username,$password);
        
        dd($result);
//        $username=$request->input("username");
//        $password=$request->input("password");
//        $result=TestModel::check($username,$password);
    }

    public function index()
    {
        return view('admin.index');
    }

}
