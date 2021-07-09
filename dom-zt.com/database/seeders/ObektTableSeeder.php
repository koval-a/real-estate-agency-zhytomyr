<?php

namespace Database\Seeders;

use App\Models\Obekts;
use Illuminate\Database\Seeder;

class ObektTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Obekts::factory()->count(100)->create();
    }
}
