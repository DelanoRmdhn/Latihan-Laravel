<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Siswa;


class FormDataController extends Controller
{
    public function index(){
        $siswas = Siswa::all();
        $categories = Category::all();

        return view('landingPage', compact('siswas', 'categories'));
    }
}
