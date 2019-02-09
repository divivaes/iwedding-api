<?php

namespace App\Http\Controllers;

use App\Application;
use App\Http\Requests\ApplicationRequest;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Location;
use Symfony\Component\HttpFoundation\Response;

class ApplicationController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ApplicationRequest $request)
    {

        $application = new Application();
        $application->name = $request->name;
        $application->phone = $request->phone;
        $application->user_ip = $request->ip();
        $application->browser = $request->userAgent();
        $application->save();

        return response("Запрос успешно добавлен", Response::HTTP_CREATED);
    }
}
