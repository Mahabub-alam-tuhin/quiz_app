<?php

namespace App\Http\Controllers;
use App\Models\quizes;
use App\Models\option;
use App\Models\question;


use Illuminate\Http\Request;

class questionController extends Controller
{ public $create,$questions;
    public function view()
    {
        return view('admin.exam.question.view',[
            'questions'=>question::all()
                ]);
                
    }
    public function store(Request $request)

    { 
        $this->create = new question();
        $this->create->quiz_id = $request->quiz_id;
        $this->create->name = $request->name;
        $this->create->Question = $request->Question;
        $this->create->option_1= $request->option_1;
        $this->create->option_2= $request->option_2;
        $this->create->option_3= $request->option_3;
        $this->create->option_4= $request->option_4;
        $this->create->Answer = $request->Answer; 
        $this->create->save();
        
        $this->create->save();
        return back()->with('message', 'info create successfully');
    }
    public function edit($id)
    {
        $questions = question::find($id);
        return view('admin.exam.question.edit', compact('questions'));
    }
    public function update(Request $request, $id)
    {
        $this->questions=question::find($id);
        $this->questions->quiz_id = $request->quiz_id;
        $this->questions->name= $request->name;
        $this->questions->Question= $request->Question;
        $this->questions->option_1= $request->option_1;
        $this->questions->option_2= $request->option_2;
        $this->questions->option_3= $request->option_3;
        $this->questions->option_4= $request->option_4;
        $this->questions->Answer= $request->Answer;
        $this->questions->update();
        return redirect()->route('admin.exam.question.view');
    }
    public function delete($id)
    {
        question::where('id', $id)->delete();
        return redirect()->route('admin.exam.question.view');
    }
  

}
