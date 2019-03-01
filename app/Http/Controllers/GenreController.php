<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Http\Resources\GenreResource;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function artist_genres()
    {
        $genres = Genre::where('type', 'Артист')->get();

        return GenreResource::collection($genres);
    }

    public function decor_genres()
    {
        $genres = Genre::where('type', 'Обслуживание')->get();

        return GenreResource::collection($genres);
    }

    public function photograph_genres()
    {
        $genres = Genre::where('type', 'Фотограф')->get();

        return GenreResource::collection($genres);
    }


    public function videomaker_genres()
    {
        $genres = Genre::where('type', 'Видеограф')->get();

        return GenreResource::collection($genres);
    }



}
