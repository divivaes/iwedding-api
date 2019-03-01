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
        return PhotographResource::collection(Photograph::orderBy('sort', 'asc')->get());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Photograph  $photograph
     * @return \Illuminate\Http\Response
     */
    public function show(Photograph $photograph)
    {
        return new PhotographResource($photograph);
    }

}
