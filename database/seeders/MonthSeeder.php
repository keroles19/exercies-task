<?php

namespace Database\Seeders;

use App\Models\Month;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MonthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $months = [
            'January','February','March','April','May',
            'June','July','August','September','October',
            'November','December'
        ];

        if(!(Month::query()->count() > 0)) {
         foreach ($months as $name){
             Month::create([
                 'name'=>$name
             ]);
         }
        }


    }
}
