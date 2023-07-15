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
        $this->create->name = $request->name;
        $this->create->Question = $request->Question;
        $this->create->Answer = $request->Answer; 
        $this->create->save();
        $this->create->options=json_encode(request()->options);
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
        $this->questions->name= $request->name;
        $this->questions->Question= $request->Question;
        $this->questions->options= $request->options;
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
