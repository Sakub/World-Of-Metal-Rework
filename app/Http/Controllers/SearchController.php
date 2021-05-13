<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Band;
use App\Models\Album;

class SearchController extends Controller
{

    public function searchForAlbums() {
        $items = Album::orderByDesc('rating')->paginate(15);

        return view('search.index', ["items" => $items]);
    }

    public function searchForBands() {
        $items = Band::orderByDesc('rating')->paginate(15);

        return view('search.index', ["items" => $items]);
    }
}
