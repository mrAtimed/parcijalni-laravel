<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('paricjalnis')->insert([
            [
                'nekaj' => "Lorem",
            ],
            [
                'nekaj' => "Ipsum",
            ]
        ]);
    }
}
