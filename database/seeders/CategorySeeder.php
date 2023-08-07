<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => [
              'name_uz' => 'stol',
                'name_en' => 'table'
            ],
        ]);
        Category::create([
            'name' => [
                'name_uz' => 'divan',
                'name_en' => 'sofa'
            ],
        ]);
        Category::create([
            'name' => [
                'name_uz' => 'yotoq',
                'name_en' => 'bed'
            ],
        ]);

        Category::create([
            'name' => [
                'name_uz' => 'stul',
                'name_en' => 'chair'
            ],
        ]);
    }
}
