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
            'ket_kategori' => 'Pelanggaran'
        ]);

        Category::create([
            'ket_kategori' => 'Kesehatan'
        ]);

        Category::create([
            'ket_kategori' => 'Fasilitas Sekolah'
        ]);

        Category::create([
            'ket_kategori' => 'Lainnya'
        ]);
    }
}
