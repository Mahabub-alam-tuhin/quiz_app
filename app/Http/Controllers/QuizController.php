<?php

namespace App\Http\Controllers;

use App\Models\quizes;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public $create,$quiz;
    /**
     * Display a listing of the resource.
     */
    public function view()
    {
        
        return view('admin.exam.quiz.view',[
            'quize'=>quizes::all()
                ]);
    }

    /**
     * Show the form for creating a new resource.
     */
  
    public function create()
    {
        return view('admin.exam.quiz.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'name'=>'requird|unique:quizes',
        // ]);
        // $data=$request->all();
    
        
        $this->create = new quizes();      
        $this->create->name = $request->name;
        $this->create->Description = $request->Description;
        $this->create->date = $request->date;
        $this->create->Time = $request->Time;
        $this->create->Number_of_question = $request->Number_of_question;
        $this->create->save();
        return back()->with('message', 'info create successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $quiz = quizes::find($id);
        return view('admin.exam.quiz.edit', compact('quiz'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->quiz=quizes::find($id);
        $this->quiz->name= $request->name;
        $this->quiz->Description= $request->Description;
        $this->quiz->date= $request->date;
        $this->quiz->Time= $request->Time;
        $this->quiz->Number_of_question= $request->Number_of_question;

        $this->quiz->update();
        return redirect()->route('admin.exam.quiz.view');
    }

    /**
     * Remove the specified resource from storage.
     */
    
     public function delete($id)
     {
        quizes::where('id', $id)->delete();
         return redirect()->route('admin.exam.quiz.view');
     }

     public function details($id)
     {
         return view('admin.exam.quiz.details', [
             'quiz' => quizes::find($id)
         ]);
     }

     public function add_question($id)
     {
        $quiz=quizes::find($id);
        return view('admin.exam.question.add_question',compact('quiz'));
     }
   
}
