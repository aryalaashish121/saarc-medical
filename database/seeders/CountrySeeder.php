<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $country = [
            ['code'=>'0977', 'name' => 'Nepal'],
            ['code'=>'0880', 'name' => 'Bangladesh'],
            ['code'=>'0091', 'name' => 'India'],
            ['code'=>'0092', 'name' => 'Pakistan'],
            ['code'=>'0093', 'name' => 'Afghanistan'],
            ['code'=>'0975', 'name' => 'Bhutan'],
            ['code'=>'0960', 'name' => 'Maldives'],
         
        ];
        foreach ($country as $c) {
            DB::table('country')->insert($c);
        }
    }
}
