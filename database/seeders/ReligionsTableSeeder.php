<?php

namespace Database\Seeders;

use App\Models\Religion;
use Illuminate\Database\Seeder;

class ReligionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $religions = [
            ['name' => 'Hinduism'],
            ['name' => 'Islam'],
            ['name' => 'Christianity'],
            ['name' => 'Buddhism'],
            ['name' => 'Sikhism'],
            ['name' => 'Taoism'],
            ['name' => 'Judaism'],
            ['name' => 'Confucianism'],
            ['name' => 'Baháí'],
            ['name' => 'Jainism'],
            ['name' => 'Zoroastrianism'],
         
        ];

        foreach ($religions as $religion) {
            Religion::create($religion);
        }
    }
}
