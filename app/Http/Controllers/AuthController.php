<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function v_login()
    {
        return view('auth.login');
    }

    public function v_regist()
    {
        return view('auth.register');
    }
}
