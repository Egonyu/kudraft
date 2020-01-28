<?php

namespace App\Http\Controllers\Admin\Campuses;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Campus;

class CampusController extends Controller
{
    public function index()
    {
        $campuses = Campus::all();
        return view('admin.campuses.campusList', compact('campuses'));
    }

    public function new()
    {
        return view('admin.campuses.newCampus');
    }

    public function addNew(Request $request)
    {
        $request-> validate(
            ['name' => 'required',
            'location' => 'required',
            'description' => 'required',
            'email' => 'required|email',
            'telephoneNo' => 'required',
            ]
        );

        $campus = Campus::create([
            'name' => $request->name,
            'location' => $request->location,
            'description' => $request->description,
            'email' => $request->email,
            'telephoneNo' => $request->telephoneNo,
            ]);

        return redirect(route('admin.dashboard.university'))->with('status', 'Campus create successfully');
    }
}
