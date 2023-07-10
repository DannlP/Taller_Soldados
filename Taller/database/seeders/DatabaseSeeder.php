<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Soldado;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Soldado::factory()->count(10)->create();
    }
}
