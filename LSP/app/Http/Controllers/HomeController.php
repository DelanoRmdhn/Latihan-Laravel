<?php

namespace App\Http\Controllers;
use App\Models\Laporan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        return view('Process', [
            'laporan' => Laporan::all()
        ]);
    }

    public function adminTable(){
        return view('admin', [
            'laporan' => Laporan::all()
        ]);
    }
}
