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
        $artists = Artist::orderBy('sort', 'asc')->get();

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
        return new ArtistResource($artist);
    }

    public function search($key)
    {
        $artists = Artist::where('name', 'LIKE', '%' . $key . '%')->get();

        return ArtistResource::collection($artists);
    }


}
