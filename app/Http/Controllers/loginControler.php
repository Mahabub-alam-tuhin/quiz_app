<?php

namespace App\Http\Controllers;

use App\Models\register;
use App\Models\Student;
use Illuminate\Http\Request;

class loginControler extends Controller
 {
    // public function register(){
    //     return view('frontEnd.student.register');
    // }

    // public function login(){
    //     return view('frontEnd.student.login');
    // }
    // public function saveregister(Request $request)
    // {
    //     $student = new register();
    //     $student->name = $request->name;
    //     $student->email = $request->email;
    //     $student->password = bcrypt($request->password);
    //     $student->save();
    //     return back();
    // }

    // public function loginCheck(Request $request)
    // {
    //     $studentInfo = register::where('email', $request->name)
    //         ->orwhere( $request->name)
    //         ->first();
    //     if ($studentInfo) {
    //         $expass = $studentInfo->password;
    //         if (password_verify($request->password, $expass)) {
    //             Session::put('studentId', $studentInfo->id);
    //             Session::put('studentName', $studentInfo->name);

    //             return redirect('/');
    //         } else {
    //             return back()->with('message', 'invalid password');
    //         }
    //     } else {
    //         return back()->with('message', 'invalid user Name');
    //     }
    }

