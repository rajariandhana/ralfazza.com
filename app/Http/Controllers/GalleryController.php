<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        // $projects = Project::all();
        return view('gallery',[
            'pageTitle'=>'Gallery'
            // 'projects' => $projects
        ]);
    }
}
