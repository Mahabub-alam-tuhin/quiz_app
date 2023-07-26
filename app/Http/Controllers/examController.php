<?php

namespace App\Http\Controllers;

use App\Models\question;
use App\Models\question_submission;
use Database\Seeders\question_submissionSeeder;
use Illuminate\Http\Request;

class examController extends Controller
{
  public $submission;
    public function question(){
        $questions= question::all();
      return view('frontEnd.question.view',compact('questions'));
            
    }
    public function store(Request $request)
    
    { 
      // dd(request()->all());
        $this->submission = new  question_submission();      
        $this->submission->quiz_id = $request->quiz_id;
        $this->submission->ques_id = $request->ques_id;
        $this->submission->submitted_answer= $request->submitted_answer;
        $this->submission->user_id = $request->user_id;        
       
        $this->submission->save();
        return back()->with('message', 'info create successfully');
    }

    
}
