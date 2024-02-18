<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;

class SiswaController extends Controller
{
    public function index(){
        return view('landingPage', [
            'siswas' => siswa::all()
        ]);
    }
}
