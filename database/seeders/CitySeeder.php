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

            // Riyadh Area
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
            // Qassim Area
            [
                'title' => 'المذنب',
                'status' => true,
                'area_id' => '2',

            ],
            [
                'title' => 'الطائف ',
                'status' => true,
                'area_id' => '2',
            ],
            // Makkah Area
            [
                'title' => 'المذنب',
                'status' => true,
                'area_id' => '3',

            ],
            [
                'title' => 'جدة ',
                'status' => true,
                'area_id' => '3',
            ]
        ]);
    }
}
