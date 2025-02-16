<?php

namespace Database\Seeders;

use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB ;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([

            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('123456789'),
                'email_verified_at' => Carbon::now(),
            ],
            [
                'name' => 'admin2',
                'email' => 'admin2@admin.com',
                'password' => Hash::make('admin2025'),
                'email_verified_at' => Carbon::now()
            ]
        ]);
    }


}
