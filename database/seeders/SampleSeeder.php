<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SampleSeeder extends Seeder
{
    public function run()
    {
        DB::table('samples')->insert([
            ['name' => 'Example 1', 'value' => 10],
            ['name' => 'Example 2', 'value' => 20],
        ]);
    }
}

