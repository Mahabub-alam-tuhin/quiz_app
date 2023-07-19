<?php

namespace Database\Seeders;

use App\Models\quizes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;
class quizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        quizes::truncate();
        // Booking::factory(10)->create();
        for($i = 1; $i<=10;$i++){
            $quize = new quizes;
            $quize->name= "name jan $i";
            $quize->Quiz="Quiz ";
            $quize->date = "date ";
            $quize->Time ="Time ";
            $quize->status =(1);
            $quize->created_at="2023-01-01 10:05"; 
            $quize->save();
        }
  
    }
}
