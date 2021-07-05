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
            ['code'=>'SLTM', 'name' => 'SAARCMC Life Time Membership'],
            ['code'=>'SGOM', 'name' => 'SAARCMC Golden Membership'],
            ['code'=>'SOM', 'name' => 'SAARCMC Organizational Membership'],
            ['code'=>'SGM', 'name' => 'SAARCMC General Membership'],
            ['code'=>'SIM', 'name' => 'SAARCMC Individual Membership'],
         
        ];

        foreach ($membership_types as $membership_type) {
            MembershipType::create($membership_type);
        }
    }
}
