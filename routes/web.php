<?php

use App\Http\Controllers\ExerciseController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/','/exercise');

Route::middleware(['auth'])->name('exercise.')->group(function(){

    Route::get('exercise',[ExerciseController::class,'index'])->name('index');
    Route::post('exercise/create',[ExerciseController::class,'store'])->name('store');

    Route::get('exercise/day-month',[ExerciseController::class,'days'])->name('days');
    Route::get('exercise/max-month',[ExerciseController::class,'maxMonth'])->name('months');


});

require __DIR__.'/auth.php';
