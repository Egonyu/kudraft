<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostGradCoursesController extends Controller
{
    public function economics()
    {
        return view('courses.postgraduate.economics');
    }

    public function businessManagement()
    {
        return view('courses.postgraduate.business-management');
    }

    public function csitPost()
    {
        return view('courses.postgraduate.csitPostGrad');
    }

    public function artsPostGrad()
    {
        return view('courses.postgraduate.artsPostGrad');
    }

    public function environmentalScience()
    {
        return view('courses.postgraduate.environmental-science');
    }

    public function publicHealth()
    {
        return view('courses.postgraduate.public-health');
    }
}
