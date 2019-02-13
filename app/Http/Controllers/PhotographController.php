<?php

namespace App\Http\Controllers;

use App\Http\Resources\PhotographResource;
use App\Photograph;
use App\PhotographGenre;
use Illuminate\Http\Request;

class PhotographController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PhotographResource::collection(Photograph::latest()->with('genres')->get());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Photograph  $photograph
     * @return \Illuminate\Http\Response
     */
    public function show(Photograph $photograph)
    {
        $genre = PhotographGenre::where('photograph_id', $photograph['id'])->with('genre')->get();
        $photograph['genres'] = $genre;
        
        return new PhotographResource($photograph);
    }

}
