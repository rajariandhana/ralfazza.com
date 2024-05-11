<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CVController extends Controller
{
    public function index()
    {
        // $projects = Project::all();
        return view('cv',[
            'pageTitle'=>'CV'
            // 'projects' => $projects
        ]);
    }
}
