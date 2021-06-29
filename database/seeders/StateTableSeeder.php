<?php

namespace Database\Seeders;

use App\Models\States;
use Illuminate\Database\Seeder;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinces = [
            ['name' => 'Province No. 1'],
            ['name' => 'Province No. 2'],
            ['name' => 'Bagmati Province'],
            ['name' => 'Gandaki Province'],
            ['name' => 'Lumbini Province'],
            ['name' => 'Karnali Province'],
            ['name' => 'Sudur Paschim Province']
        ];

        foreach ($provinces as $province) {
            States::create($province);
        }
    }
}
