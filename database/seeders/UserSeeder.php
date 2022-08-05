<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Marsha',
                'email' => 'marshak@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Macca',
                'email' => 'macca@gmail.com',
                'password' => bcrypt('password'),
            ],
        ];

        User::insert($users);
    }
}
