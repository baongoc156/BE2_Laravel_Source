<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5000000; $i++) { 
            DB::table('trainers')->insert([
                'trainer_name' => "a".$i,
                'company_id' => $i,
                'trainer_email' => String::random(12)."@gmail.com",
                'trainer_phone' => "01234567",
            ]);
        }
    }
}
