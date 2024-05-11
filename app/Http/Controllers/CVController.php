<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employer;
use App\Models\Position;

class CVController extends Controller
{
    public function index()
    {
        $employers = Employer::all();
        foreach ($employers as $employer) {
            $employer->positions = Position::where('employer_nama', $employer->nama)->get();
        }
        return view('cv',[
            'pageTitle'=>'CV',
            'employers' => $employers,
        ]);
    }
}
