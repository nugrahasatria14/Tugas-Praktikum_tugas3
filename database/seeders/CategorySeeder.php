<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'category' => 'Novel',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'Teknologi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'Sejarah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'Pendidikan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}