<?php

namespace App\Observers;

use App\Models\Exercise;
use Carbon\Carbon;

class ExerciseObserve
{
    public function creating(Exercise $exercise)
    {
        $exercise->month_id = Carbon::now()->month;
    }
}
