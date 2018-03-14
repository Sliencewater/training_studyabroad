<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AccountModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    //
    public function login(Request $request){
        if($request->isMethod('post'))
        {
            if($request->isMethod('post')) {
                $email = $request->input('email');
                $password = $request->input('password');
                $remember = (bool)$request->rememberme;
                if (Auth::attempt(['email' => $email, 'password' => $password],$remember)) {
                    // 认证通过...
//                    return view('account.signin');
                    return "登录成功";
                    
                }
                else
                {
                    return "密码错误";
                }


            }
        }else
        {
            return view('account.signin');
//            return "当前方法".$request->method();
        }
    }

    public function register(Request $request)
    {
        if($request->isMethod('post'))
        {
            if($request->password == $request->passwordagain)
            {
                $accountmodel = new AccountModel;
                $accountmodel->username = $request->username;
                $accountmodel->email  = $request->email;
                $accountmodel->password  = $request->password;
                $accountmodel->save();

                return "success";
            }
            else
            {
                return "error";
            }


        }
        else
        {
            return "error-1";
        }

    }
    public function apply(){
        return view('account.apply');
    }

    public function basicInformation(){
        return view('layouts.apply.basicInformation');
    }

    public function languageAbility(){
        return view('layouts.apply.languageAbility');
    }

    public function educationBackground(){
        return view('layouts.apply.educationBackground');
    }

    public function familyBackground(){
        return view('layouts.apply.familyBackground');
    }

    public function contactInformation(){
        return view('layouts.apply.contactInformation');
    }

    public function uploadDocuments(){
        return view('layouts.apply.uploadDocuments');
    }
    public function accountExit(){
        Auth::logout();
        return view('layouts.apply.uploadDocuments');
    }
}
