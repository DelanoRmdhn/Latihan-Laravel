<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Tambahkan ini jika Anda menggunakan model User

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $user = new User(); // Buat instansi model User
        $user->username = 'Delano';
        $user->password = Hash::make('12345');
        $user->save(); // Simpan data ke dalam database
    }
}
