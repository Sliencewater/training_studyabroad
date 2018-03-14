<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }
    public function apply()
    {
        return view('welcome');
    }
    public function info()
    {
        return (string)phpinfo();
    }
}
