<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

        public function run(): void
        {

            DB::table('areas')->insert([

                [
                    'title' => 'الرياض',
                    'status' => true,


                ],
                [
                    'title' => 'القصيم',
                    'status' => true,

                ],
                [
                    'title' => 'مكة المكرمة',
                    'status' => true,

                ]
            ]);
        }
        }


