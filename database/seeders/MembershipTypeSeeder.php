<?php

namespace Database\Seeders;

use App\Models\MembershipType;
use Illuminate\Database\Seeder;

class MembershipTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $membership_types = [
            ['name' => 'Type 1 Member'],
            ['name' => 'Type 2 Member'],
            
         
        ];

        foreach ($membership_types as $membership_type) {
            MembershipType::create($membership_type);
        }
    }
}
