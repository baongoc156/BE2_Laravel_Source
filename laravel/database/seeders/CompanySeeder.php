<?php

namespace Database\Seeders;


use App\Models\Company;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 1000; $i++) { 
            DB::table('companies')->insert([
                'company_name' => "ng".$i,
                'company_web' => "tdc". $i,
                'company_address' => Str::random(10),
                'company_code' => Str::random(10),
                'company_phone' => 01234567,
            ]);
        }
    }
}
