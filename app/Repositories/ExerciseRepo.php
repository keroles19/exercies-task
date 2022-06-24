<?php

namespace App\Repositories;

use App\Http\Controllers\Controller;
use App\Interfaces\Exercise;
use App\Models\Month;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class ExerciseRepo extends Controller implements Exercise
{

    public function storeExercise($request)
    {
        auth()->user()->exercises()->create($request->all());
        return back()->with(['success','create successfuly']);
    }

    public function showExercises($view,$request)
    {
        $model =  auth()->user()->exercises()->when($request,function ($query) use($request){
           if($request->search){
               $query->whereDate('created_at',$request->search);
           }else{
               $query->whereDate('created_at',Carbon::today());
           }
        })->get();
        return view($view)->with(
            ['model'=>$model]
        );
    }

    public function getDayOfMonth($view)
    {

        $model = auth()->user()->exercises()->where('month_id',Carbon::now()->month)
            ->orderBy('created_at', 'ASC')->get()
            ->groupBy(function ($query) {
                return Carbon::parse($query->created_at)->format('Y-m-d');
            });

        return view($view)->with([
           'model'=>$model
       ]);
    }

    public function getMaxMonth($view)
    {
        $model = Month::with('exercises')->withcount('exercises')->orderByDesc('exercises_count')->first();
        return view($view)->with(['model'=>$model]);
    }
}
