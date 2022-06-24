<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateExercise;
use App\Interfaces\Exercise;
use App\Models\Month;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    protected Exercise $exercise;
    public function __construct(Exercise $exercise)
    {
        $this->exercise = $exercise;
    }
    public function index(Request $request){
       return $this->exercise->showExercises('exercise.index',$request);
    }

    public function store(CreateExercise $request){

        return $this->exercise->storeExercise($request);

    }

    public function days(){

        return $this->exercise->getDayOfMonth('exercise.days');
    }

    public function maxMonth(){

        return $this->exercise->getMaxMonth('exercise.months');
    }

}
