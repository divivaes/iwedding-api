<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Http\Resources\GalleryResource;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return GalleryResource::collection(Gallery::latest()->get());
    }

}
