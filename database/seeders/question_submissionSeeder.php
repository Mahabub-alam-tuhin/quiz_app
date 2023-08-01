<?php

namespace Database\Seeders;

use App\Models\question_submission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class question_submissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        question_submission::truncate();
        for($i = 1; $i<=1;$i++){
            $submission = new question_submission;
            $submission->quiz_id= "1";
            $submission->ques_id="1";
            $submission->submitted_answer= "ঢাকা";
            $submission->user_id ="1";
            $submission->status =(1);
            $submission->save();
        }
        for($i = 1; $i<=1;$i++){
            $submission = new question_submission;
            $submission->quiz_id= "1";
            $submission->ques_id="2";
            $submission->submitted_answer= "পদ্মা";
            $submission->user_id ="1";
            $submission->status =(1);
            $submission->save();
        }
        for($i = 1; $i<=1;$i++){
            $submission = new question_submission;
            $submission->quiz_id= "1";
            $submission->ques_id="3";
            $submission->submitted_answer= "প্রতি ৩ বছরে একবার";
            $submission->user_id ="1";
            $submission->status =(1);
            $submission->save();
        }
        for($i = 1; $i<=1;$i++){
            $submission = new question_submission;
            $submission->quiz_id= "1";
            $submission->ques_id="4";
            $submission->submitted_answer= "কৃষ্ণচুড়া";
            $submission->user_id ="1";
            $submission->status =(1);
            $submission->save();
        }

        for($i = 1; $i<=1;$i++){
            $submission = new question_submission;
            $submission->quiz_id= "2";
            $submission->ques_id="5";
            $submission->submitted_answer= "Paris";
            $submission->user_id ="1";
            $submission->status =(1);
            $submission->save();
        }
        for($i = 1; $i<=1;$i++){
            $submission = new question_submission;
            $submission->quiz_id= "2";
            $submission->ques_id="6";
            $submission->submitted_answer= "Saturn";
            $submission->user_id ="1";
            $submission->status =(1);
            $submission->save();
        }
        for($i = 1; $i<=1;$i++){
            $submission = new question_submission;
            $submission->quiz_id= "2";
            $submission->ques_id="7";
            $submission->submitted_answer= "William Shakespeare";
            $submission->user_id ="1";
            $submission->status =(1);
            $submission->save();
        }
        for($i = 1; $i<=1;$i++){
            $submission = new question_submission;
            $submission->quiz_id= "2";
            $submission->ques_id="8";
            $submission->submitted_answer= "CO2";
            $submission->user_id ="1";
            $submission->status =(1);
            $submission->save();
        }
  
        for($i = 1; $i<=1;$i++){
            $submission = new question_submission;
            $submission->quiz_id= "1";
            $submission->ques_id="1";
            $submission->submitted_answer= "ঢাকা";
            $submission->user_id ="2";
            $submission->status =(1);
            $submission->save();
        }
        for($i = 1; $i<=1;$i++){
            $submission = new question_submission;
            $submission->quiz_id= "1";
            $submission->ques_id="2";
            $submission->submitted_answer= "পদ্মা";
            $submission->user_id ="2";
            $submission->status =(1);
            $submission->save();
        }
        for($i = 1; $i<=1;$i++){
            $submission = new question_submission;
            $submission->quiz_id= "1";
            $submission->ques_id="3";
            $submission->submitted_answer= "প্রতি ৩ বছরে একবার";
            $submission->user_id ="2";
            $submission->status =(1);
            $submission->save();
        }
        for($i = 1; $i<=1;$i++){
            $submission = new question_submission;
            $submission->quiz_id= "1";
            $submission->ques_id="4";
            $submission->submitted_answer= "কৃষ্ণচুড়া";
            $submission->user_id ="2";
            $submission->status =(1);
            $submission->save();
        }

        for($i = 1; $i<=1;$i++){
            $submission = new question_submission;
            $submission->quiz_id= "2";
            $submission->ques_id="5";
            $submission->submitted_answer= "Paris";
            $submission->user_id ="2";
            $submission->status =(1);
            $submission->save();
        }
        for($i = 1; $i<=1;$i++){
            $submission = new question_submission;
            $submission->quiz_id= "2";
            $submission->ques_id="6";
            $submission->submitted_answer= "Saturn";
            $submission->user_id ="2";
            $submission->status =(1);
            $submission->save();
        }
        for($i = 1; $i<=1;$i++){
            $submission = new question_submission;
            $submission->quiz_id= "2";
            $submission->ques_id="7";
            $submission->submitted_answer= "William Shakespeare";
            $submission->user_id ="2";
            $submission->status =(1);
            $submission->save();
        }
        for($i = 1; $i<=1;$i++){
            $submission = new question_submission;
            $submission->quiz_id= "2";
            $submission->ques_id="8";
            $submission->submitted_answer= "CO2";
            $submission->user_id ="2";
            $submission->status =(1);
            $submission->save();
        }
        
        for($i = 1; $i<=1;$i++){
            $submission = new question_submission;
            $submission->quiz_id= "1";
            $submission->ques_id="1";
            $submission->submitted_answer= "ঢাকা";
            $submission->user_id ="3";
            $submission->status =(1);
            $submission->save();
        }
        for($i = 1; $i<=1;$i++){
            $submission = new question_submission;
            $submission->quiz_id= "1";
            $submission->ques_id="2";
            $submission->submitted_answer= "পদ্মা";
            $submission->user_id ="3";
            $submission->status =(1);
            $submission->save();
        }
        for($i = 1; $i<=1;$i++){
            $submission = new question_submission;
            $submission->quiz_id= "1";
            $submission->ques_id="3";
            $submission->submitted_answer= "প্রতি ৩ বছরে একবার";
            $submission->user_id ="3";
            $submission->status =(1);
            $submission->save();
        }
        for($i = 1; $i<=1;$i++){
            $submission = new question_submission;
            $submission->quiz_id= "1";
            $submission->ques_id="4";
            $submission->submitted_answer= "কৃষ্ণচুড়া";
            $submission->user_id ="3";
            $submission->status =(1);
            $submission->save();
        }

        for($i = 1; $i<=1;$i++){
            $submission = new question_submission;
            $submission->quiz_id= "2";
            $submission->ques_id="5";
            $submission->submitted_answer= "Paris";
            $submission->user_id ="3";
            $submission->status =(1);
            $submission->save();
        }
        for($i = 1; $i<=1;$i++){
            $submission = new question_submission;
            $submission->quiz_id= "2";
            $submission->ques_id="6";
            $submission->submitted_answer= "Saturn";
            $submission->user_id ="3";
            $submission->status =(1);
            $submission->save();
        }
        for($i = 1; $i<=1;$i++){
            $submission = new question_submission;
            $submission->quiz_id= "2";
            $submission->ques_id="7";
            $submission->submitted_answer= "William Shakespeare";
            $submission->user_id ="3";
            $submission->status =(1);
            $submission->save();
        }
        for($i = 1; $i<=1;$i++){
            $submission = new question_submission;
            $submission->quiz_id= "2";
            $submission->ques_id="8";
            $submission->submitted_answer= "CO2";
            $submission->user_id ="3";
            $submission->status =(1);
            $submission->save();
        }
      
        for($i = 1; $i<=1;$i++){
            $submission = new question_submission;
            $submission->quiz_id= "1";
            $submission->ques_id="1";
            $submission->submitted_answer= "ঢাকা";
            $submission->user_id ="4";
            $submission->status =(1);
            $submission->save();
        }
        for($i = 1; $i<=1;$i++){
            $submission = new question_submission;
            $submission->quiz_id= "1";
            $submission->ques_id="2";
            $submission->submitted_answer= "পদ্মা";
            $submission->user_id ="4";
            $submission->status =(1);
            $submission->save();
        }
        for($i = 1; $i<=1;$i++){
            $submission = new question_submission;
            $submission->quiz_id= "1";
            $submission->ques_id="3";
            $submission->submitted_answer= "প্রতি ৩ বছরে একবার";
            $submission->user_id ="4";
            $submission->status =(1);
            $submission->save();
        }
        for($i = 1; $i<=1;$i++){
            $submission = new question_submission;
            $submission->quiz_id= "1";
            $submission->ques_id="4";
            $submission->submitted_answer= "কৃষ্ণচুড়া";
            $submission->user_id ="4";
            $submission->status =(1);
            $submission->save();
        }

        for($i = 1; $i<=1;$i++){
            $submission = new question_submission;
            $submission->quiz_id= "2";
            $submission->ques_id="5";
            $submission->submitted_answer= "Paris";
            $submission->user_id ="4";
            $submission->status =(1);
            $submission->save();
        }
        for($i = 1; $i<=1;$i++){
            $submission = new question_submission;
            $submission->quiz_id= "2";
            $submission->ques_id="6";
            $submission->submitted_answer= "Saturn";
            $submission->user_id ="4";
            $submission->status =(1);
            $submission->save();
        }
        for($i = 1; $i<=1;$i++){
            $submission = new question_submission;
            $submission->quiz_id= "2";
            $submission->ques_id="7";
            $submission->submitted_answer= "William Shakespeare";
            $submission->user_id ="4";
            $submission->status =(1);
            $submission->save();
        }
        for($i = 1; $i<=1;$i++){
            $submission = new question_submission;
            $submission->quiz_id= "2";
            $submission->ques_id="8";
            $submission->submitted_answer= "CO2";
            $submission->user_id ="4";
            $submission->status =(1);
            $submission->save();
        }
    }
}
