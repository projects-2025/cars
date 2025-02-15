<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB ;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('types')->insert([

            [
                'title' => 'بريوس',
                'status' => true,
                'brand_id' => '1',

            ],
            [
                'title' => 'كورولا',
                'status' => true,
                'brand_id' => '1',
            ],
            [
                'title' => 'سورينتو',
                'status' => true,
                'brand_id' => '2',

            ],
            [
                'title' => 'سبورتاج ',
                'status' => true,
                'brand_id' => '2',
            ]
        ]);
    }
}
