<?php

namespace App\Http\Controllers;

use App\Models\quizes;
use App\Models\question;


use Illuminate\Http\Request;

class frontController extends Controller
{
    public function index(){
        return view('frontEnd.home.home');
    }

    public function view()
    {
       
        $questions = question::all();
        return view('frontEnd.exam.view', compact('questions'));
    }
    
}
