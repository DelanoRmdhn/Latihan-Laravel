<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('landingPage', [
            'categories' => Category::all(),
            'dataSiswa' => User::all()
        ]);
    }
}
