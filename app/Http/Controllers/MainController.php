<?php

namespace App\Http\Controllers;

use App\Models\Band;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $bands = Band::limit(7)->orderByDesc('rating')->get();
        return view('home', compact('bands'));
    }
}
