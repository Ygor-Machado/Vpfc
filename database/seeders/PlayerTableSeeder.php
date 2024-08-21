<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('players')->insert([
            [
                'name' => 'Ygor Machado',
                'position' => 'PE',
                'number' => '10',
            ],

            [
                'name' => 'Guilherme Gomes',
                'position' => 'ATA',
                'number' => '9',
            ],
        ]);
    }
}
