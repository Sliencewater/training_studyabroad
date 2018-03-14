<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountModel extends Model
{
    //
    protected $table = 'users_password_records';
    protected $casts = [
        'user_id' => 'int',

    ];
}
