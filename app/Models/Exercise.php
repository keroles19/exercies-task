<?php

namespace App\Models;

use App\Observers\ExerciseObserve;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;

    protected $fillable = [
       'exercise_name', 'hours', 'mints', 'user_id' , 'month_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function month(){
        return $this->belongsTo(Month::class,'month_id');
    }

    public static function boot()
    {
        parent::boot();
        static::observe(ExerciseObserve::class);
    }
}
