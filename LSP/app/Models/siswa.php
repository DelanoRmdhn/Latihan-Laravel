<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswas';

    protected $fillable = [
        'nis',
        'kelas',
    ];


    public function laporan(){
        return $this->hasMany(Laporan::class);
    }
}
