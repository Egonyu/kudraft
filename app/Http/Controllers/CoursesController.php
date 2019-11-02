<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function csit()
    {
        return view('courses.undergraduate.csit');
    }

    public function businessAdministration()
    {
        return view('courses.undergraduate.business-administration');
    }

    public function agriculture()
    {
        return view('courses.undergraduate.agriculture');
    }

    public function education()
    {
        return view('courses.undergraduate.education');
    }

    public function naturalSciences()
    {
        return view('courses.undergraduate.natural-sciences');
    }

    public function nursing()
    {
        return view('courses.undergraduate.nursing');
    }

    public function arts()
    {
        return view('courses.undergraduate.arts');
    }

    public function industrialArt()
    {
        return view('courses.undergraduate.industrial-art');
    }

    public function publicAdministration()
    {
        return view('courses.undergraduate.public-administration');
    }

    public function filmSchool()
    {
        return view('courses.undergraduate.film-school');
    }
}
