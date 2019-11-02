<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampusesController extends Controller
{
    public function ggaba()
    {
        return view('campuses.ggaba');
    }

    public function masaka()
    {
        return view('campuses.masaka');
    }

    public function lweero()
    {
        return view('campuses.lweero');
    }

    public function jinja()
    {
        return view('campuses.jinja');
    }

    public function mutundwe()
    {
        return view('campuses.mutundwe');
    }

    public function kitengela()
    {
        return view('campuses.kitengela');
    }
}
