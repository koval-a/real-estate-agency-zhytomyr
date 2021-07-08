<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Set default user and admin
        $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@dom-zt.com',
               'is_admin'=>'1',
               'password'=> bcrypt('123456'),
               'avatar'=> 'avatar.png',
               'phone'=> '000-000-0000',
            ],
            [
               'name'=>'Rieltor',
               'email'=>'rieltor@dom-zt.com',
               'is_admin'=>'0',
               'password'=> bcrypt('123456'),
               'avatar'=> 'avatar.png',
               'phone'=> '098-001-0101',
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
