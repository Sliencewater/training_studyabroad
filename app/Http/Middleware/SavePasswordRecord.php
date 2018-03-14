<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\AccountModel;
use App\Flight;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use SebastianBergmann\CodeCoverage\Report\Xml\Facade;

class SavePasswordRecord
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if ($request->password_confirmation == $request->password)
            {
                $accountmodel = new AccountModel;
                $accountmodel->user_name = $request->username;
                $accountmodel->email  = $request->email;
                $accountmodel->password  = $request->password;
                $accountmodel->save();
                $user_id= DB::select('select id from users_password_records where email = :email',['email' => $request->email]);

                $str_id_basic=10000;
                $str_id = $user_id[0]->id+$str_id_basic;
                DB::update('update users_password_records set user_id =:str_id where email =:email',['str_id'=>$str_id,'email'=>$request->email]);

            }

        return $next($request);
    }
}
