<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function login()
    {
        return "登录成功";
    }

    public function logout()
    {
        return "退出成功";

    }
}
