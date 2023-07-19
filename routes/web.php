<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\questionController;
use App\Http\Controllers\examController;
use App\Http\Controllers\answerController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [frontController::class, 'index'])->name('/');
Route::get('/view', [frontController::class, 'view'])->name('frontEnd.exam.view');
Route::get('/question', [examController::class, 'question'])->name('frontEnd.question.view');
Route::post('/store', [examController::class, 'store'])->name('frontEnd.question.store');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
    Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');
    

    Route::prefix('quiz')->group(function () {
        Route::get('/create', [QuizController::class, 'create'])->name('admin.exam.quiz.create');
        Route::post('/store', [QuizController::class, 'store'])->name('admin.exam.quiz.store');
        Route::get('/view', [QuizController::class, 'view'])->name('admin.exam.quiz.view');
        Route::get('/edit/{id}', [QuizController::class, 'edit'])->name('admin.exam.quiz.edit');
        Route::post('/update/{id}', [QuizController::class, 'update'])->name('admin.exam.quiz.update');
        Route::get('/delete/{id}', [QuizController::class, 'delete'])->name('admin.exam.quiz.delete');
        Route::get('/details/{id}', [QuizController::class, 'details'])->name('admin.exam.quiz.details');

        Route::get('/add_question/{id}', [QuizController::class, 'add_question'])->name('admin.exam.question.add_question');
        
    });

    Route::prefix('exam')->group(function () {
       
        Route::post('/store', [questionController::class, 'store'])->name('admin.exam.question.store');
        Route::get('/view', [questionController::class, 'view'])->name('admin.exam.question.view');
        Route::get('/edit/{id}', [questionController::class, 'edit'])->name('admin.exam.question.edit');
        Route::post('/update/{id}', [questionController::class, 'update'])->name('admin.exam.question.update');
        Route::get('/delete/{id}', [questionController::class, 'delete'])->name('admin.exam.question.delete');

    });
   
});
