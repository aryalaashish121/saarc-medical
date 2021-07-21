<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminUser = User::create([
            'name' => 'superadmin',
            'email' => 'admin@example.com',
            'password' => Hash::make('123456'),
            'is_admin' => true
        ],
        [
        'name' => 'superadmin',
        'email' => 'superadmin@saarcmc',
        'password' => Hash::make('saarcmc@admin'),
        'is_admin' => true
    ]);
    }
}
