<?php

namespace Database\Seeders;

use App\Models\question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class questionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            question::truncate();
            // Booking::factory(10)->create();
            for($i = 1; $i<=30;$i++){
                $questions = new question;
                $questions->name= "name jan $i";
                $questions->Question="Question ";
                $questions->option_1 = "option_1 ";
                $questions->option_2 = "option_2 ";
                $questions->option_3 = "option_3 ";
                $questions->option_4 = "option_4 ";
                $questions->Answer ="Answer";
                $questions->status =(1);
                $questions->save();
            }
    }
    }
}