<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;

class UsersPasswordModel extends Model
{
    //用户账号密码表
    protected $table='users';

    //检查账号密码是否正确
    public static function check($email,$password){
//        $user=UsersPasswordModel::where(['email'=>$email])->first();
//
//        //判断是否有此用户
//        if($user != null){
//            if(bcrypt($password,$user->password)){
////                return true;
//                return 'test1';
//            }
//            else{
//                return 'test2';
//                return false;
//            }
//        }else{
//            return 'test3';
//            return false;
//        }

        if (Auth::attempt(array('email' => $email, 'password' => $password),false))
        {
//            return Redirect::to('admin');
            return true;

        }else{
//            return Redirect::to('login')->with('login_errors','用户名或密码不正确！');
            return false;
        }

    }
}
