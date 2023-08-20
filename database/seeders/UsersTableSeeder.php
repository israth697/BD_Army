<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::create([
        //     'name'=>'Admin',
        //     'email'=>'admin@gmail.com',
        //     'password'=>bcrypt('123456')
        // ]);

        // User::create([
        //     'name'=>'Commander',
        //     'role'=>'commander',
        //     'email'=>'commander@gmail.com',
        //     'password'=>bcrypt('123456')
        // ]);

        User::create([
            'name'=>'DutyOfficer',
            'role'=>'dutyofficer',
            'email'=>'dutyofficer@gmail.com',
            'password'=>bcrypt('123456')
        ]);
    }
}
