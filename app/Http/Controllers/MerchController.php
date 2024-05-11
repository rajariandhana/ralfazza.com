<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MerchController extends Controller
{
    public function index()
    {
        // $projects = Project::all();
        return view('merch',[
            'pageTitle'=>'Merch',
            // 'projects' => $projects
        ]);
    }
}
