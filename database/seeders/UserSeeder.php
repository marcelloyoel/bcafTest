<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'marketing',
            'name'  => 'Marketing Andy',
            'role'  => 1,
            'password'  => bcrypt('12345'),
        ]);
        User::create([
            'username' => 'admin',
            'name'  => 'Admin Cello',
            'role'  => 2,
            'password'  => bcrypt('12345'),
        ]);
        User::create([
            'username' => 'atasan',
            'name'  => 'Atasan Yoel',
            'role'  => 3,
            'password'  => bcrypt('12345'),
        ]);
    }
}
