<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KuPagesController extends Controller
{
    public function admission()
    {
        return view('pages.admissions');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function home()
    {
        return view('pages.home');
    }

    public function accomodation()
    {
        return view('pages.accomodation');
    }

    public function apply()
    {
        return view('pages.apply');
    }

    public function campuses()
    {
        return view('pages.campuses');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function council()
    {
        return view('pages.council');
    }

    public function library()
    {
        return view('pages.library');
    }

    public function postgraduates()
    {
        return view('pages.postgraduates');
    }

    public function undergraduates()
    {
        return view('pages.undergraduates');
    }

    public function research()
    {
        return view('pages.research');
    }

    public function sports()
    {
        return view('pages.sports');
    }

    public function studentsWithDisabilities()
    {
        return view('pages.studentswithdisabilities');
    }

    public function alumni()
    {
        return view('pages.alumni ');
    }

    public function cisco()
    {
        return view('pages.cisco');
    }
    
    public function qualityAssurance()
    {
        return view('pages.quality-assurance');
    }

    public function uniLife()
    {
        return view('pages.uni-life');
    }

    public function vc()
    {
        return view('pages.vc');
    }
}
