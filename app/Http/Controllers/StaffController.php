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
    public function show($id)
    {
        $slug = ucwords(str_replace('-', ' ', $id));

        $user = User::where('name', $slug)->get();

        $user[0]->avatar = "http:127.0.0.1:8001/storage/users/profile/" . $user[0]->avatar;
        $user[0]->role_id = $user[0]->role->name;

        return $user;
    }
}
