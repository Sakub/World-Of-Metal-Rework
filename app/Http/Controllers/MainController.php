<?php

namespace App\Http\Controllers;

use App\Models\Band;
use App\Models\Album;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $bands = Band::limit(7)->orderByDesc('rating')->get();
        $albums = Album::limit(7)->orderByDesc('rating')->get();
        return view('home', compact(['bands', 'albums']));
    }
}
