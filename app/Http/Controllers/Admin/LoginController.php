<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //

    public function login()
    {
        $user = DB::class;
//         return view('Admin.login');
/*        $password = 123456;
        $pwd = Hash::make($password);
        echo Hash::check('123456',$pwd);*/
//        $data = $user->select('username');
        var_dump($user);
    }
}
