<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 1000; $i++) { 
            DB::table('trainers')->insert([
                'trainer_name' => "a".$i,
                'company_id' => $i,
                'trainer_email' => Str::random(12)."@gmail.com",
                'trainer_phone' => "01234567",
            ]);
        }
    }
}
