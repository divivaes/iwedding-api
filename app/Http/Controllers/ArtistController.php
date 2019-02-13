<?php

namespace App\Http\Controllers;

use App\Artist;
use App\ArtistGenre;
use App\Http\Resources\ArtistResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artists = Artist::latest()->with('genres')->get();

        return ArtistResource::collection($artists);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function show(Artist $artist)
    {
        $art = ArtistGenre::where('artist_id', $artist['id'])->with('genre')->get();
        $artist['genres'] = $art;

        return new ArtistResource($artist);
    }

}
