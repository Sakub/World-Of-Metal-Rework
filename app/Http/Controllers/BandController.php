<?php

namespace App\Http\Controllers;

use App\Models\Band;
use App\Models\Genre;
use App\Models\Album;
use App\Models\Nationality;
use Illuminate\Http\Request;

class BandController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Band  $band
     * @return \Illuminate\Http\Response
     */
    public function show(Band $band)
    {
        $bandAlbums = [];

        $genre = Genre::where('id', $band->genre_id)->first()->name;
        $nationality = Nationality::where('id', $band->nationality_id)->first()->name;
        $albums = Album::all();

        $band->genre = $genre;
        $band->nationality = $nationality;
        foreach($albums as $album) {
            if ($album["band_id"] == $band->id) array_push($bandAlbums, $album);
        }
        $band->albums = $bandAlbums;
        
        return view('bands.view', compact('band'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Band  $band
     * @return \Illuminate\Http\Response
     */
    public function edit(Band $band)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Band  $band
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Band $band)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Band  $band
     * @return \Illuminate\Http\Response
     */
    public function destroy(Band $band)
    {
        //
    }
}
