<?php

namespace App\Interfaces;

interface Exercise
{

    public function storeExercise($request);

    public function showExercises($view,$request);


    public function getDayOfMonth($view);

    public function getMaxMonth($view);


}
