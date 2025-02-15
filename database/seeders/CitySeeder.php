<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cities')->insert([

            [
                'title' => 'السليل',
                'status' => true,
                'area_id' => '1',

            ],
            [
                'title' => 'الزلفي',
                'status' => true,
                'area_id' => '1',
            ],

            [
                'title' => 'المذنب',
                'status' => true,
                'area_id' => '2',

            ],
            [
                'title' => 'ضرية ',
                'status' => true,
                'area_id' => '2',
            ]
        ]);
    }
}
