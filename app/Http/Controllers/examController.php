<?php

namespace App\Http\Controllers;

use App\Models\answer;
use App\Models\question;
use Illuminate\Http\Request;

class examController extends Controller
{
  public $answers;
    public function question(){
        $questions= question::all();
      return view('frontEnd.question.view',compact('questions'));
            
    }
    public function store(Request $request)
    
    { 
      // dd(request()->all());
        $this->answers = new answer();      
        $this->answers->Question = $request->Question;
        $this->answers->option_1= $request->option_1;
        $this->answers->option_2= $request->option_2;
        $this->answers->option_3= $request->option_3;
        $this->answers->option_4= $request->option_4;
       
        $this->answers->save();
        return back()->with('message', 'info create successfully');
    }

    
}
