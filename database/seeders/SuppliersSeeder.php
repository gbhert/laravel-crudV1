<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class SuppliersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
        'fname'=>Str::random(10),
        'mname'=>Str::random(10),
        'lname'=>Str::random(10),
        'email'=>Str::random(10).'@gmail.com',
        'company_name'=>Str::random(10),
        'street'=>Str::random(10),
        'city_town'=>Str::random(10),
        'state_province'=>Str::random(10),
        
        'country'=>Str::random(10),
        'notes'=>Str::random(10),
       
       
        
        
     
        
        'website'=>Str::random(10).'.com',
        'other'=>Str::random(10)
        ]);
    }
}
