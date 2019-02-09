<?php

namespace App\Http\Controllers;

use App\Decor;
use App\Http\Resources\DecorResource;
use Illuminate\Http\Request;

class DecorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DecorResource::collection(Decor::latest()->get());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Decor  $decor
     * @return \Illuminate\Http\Response
     */
    public function show(Decor $decor)
    {
        return new DecorResource($decor);
    }
}
