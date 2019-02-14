<?php

namespace App\Http\Controllers;

use App\Http\Resources\VideomakerResource;
use App\Videomaker;
use App\VideomakerGenre;
use Illuminate\Http\Request;

class VideomakerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return VideomakerResource::collection(Videomaker::latest()->get());
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Videomaker  $videomaker
     * @return \Illuminate\Http\Response
     */
    public function show(Videomaker $videomaker)
    {
        return new VideomakerResource($videomaker);
    }

}
