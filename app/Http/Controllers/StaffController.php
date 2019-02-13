<?php

namespace App\Http\Controllers;

use App\Http\Resources\StaffResource;
use App\User;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return StaffResource::collection(User::latest()->get());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $staff)
    {
        $user = User::where('slug', $staff)->with('role')->get();

        return new StaffResource($staff);
    }
}
