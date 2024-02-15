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
            'ket_kategori' => 'Kebersihan'
        ]);

        Category::create([
            'ket_kategori' => 'Keamanan'
        ]);

        Category::create([
            'ket_kategori' => 'Lainnya'
        ]);
    }
}
