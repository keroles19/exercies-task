<?php

namespace App\Providers;

use App\Interfaces\Exercise;
use App\Repositories\ExerciseRepo;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Exercise::class,ExerciseRepo::class);
    }

}
