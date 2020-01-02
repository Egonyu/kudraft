<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class BlogController extends BaseController
{
    function dashboard(){
    	return view('amin.blog.dashboard');
    }

    function newPost(){
    	return view('admin.blog.new-post');
    }

    function list(){
        return view('admin.blog.list');
    }

    function detail(){
    	return view('admin.blog.detail');
    }
}
