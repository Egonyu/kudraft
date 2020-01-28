<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class AuthenticationController extends BaseController
{
    function login(){
    	return view('admin.authentication.login');
    }

    function register(){
    	return view('admin.authentication.register');
    }

    function lockscreen(){
        return view('admin.authentication.lockscreen');
    }

    function forgotPassword(){
    	return view('admin.authentication.forgot-password');
    }

    function page404(){
    	return view('admin.authentication.page404');
    }

    function page403(){
        return view('admin.authentication.page403');
    }

    function page500(){
        return view('authentication.page500');
    }

    function page503(){
    	return view('authentication.page503');
    }
}
