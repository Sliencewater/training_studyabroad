<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    //
    protected $table='admin_users';

    public static function check($username,$password)
    {
        $user=AdminModel::where(["username"=>$username])->first();
        if($user != null)
        {

            //密码未加密
//            if($password==$user->password)
//            {
//                return true;
//            }else{
//                return false;
//            }

            //数据库中密码加密过
            if(Hash::check($password, $user->password))
            {
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
}
