<?php

namespace Database\Seeders;


use App\Models\Company;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5000000; $i++) { 
            DB::table('companies')->insert([
                'company_name' => "ng".$i,
                'company_web' => "tdc". $i,
                'company_address' => String::random(10),
                'company_code' => String::random(10),
                'company_phone' => 01234567,
            ]);
        }
    }
}
