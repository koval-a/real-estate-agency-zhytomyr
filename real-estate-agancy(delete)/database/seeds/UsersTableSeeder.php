<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name'=>'Admin',
            'email'=>'admin@dom-zt.com',
            'password'=> bcrypt('123456'),
            'avatar'=> 'admin.png',
            'phone'=> '098-000-0001',
            'type'=>'admin',
        ]);

        App\User::create([
            'name'=>'Rieltor',
            'email'=>'rieltor@dom-zt.com',
            'password'=> bcrypt('123456'),
            'avatar'=> 'rieltor.png',
            'phone'=> '098-000-0002',
            'type'=>'default',
        ]);
    }
}
