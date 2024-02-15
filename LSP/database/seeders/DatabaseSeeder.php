<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Laporan;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(20)->create();

        Laporan::create([
            'nis' => '1290381221',
            'aspirasi' => 'aspirasi',
            'lokasi_kejadian' => 'lokasi',
            'keterangan' => 'keterangan',
            'category_id' => '1'
        ]);
    }
}
