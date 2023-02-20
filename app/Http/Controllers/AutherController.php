<?php

namespace App\Http\Controllers;

use App\Http\Resources\AutherCollection;
use App\Http\Resources\AutherResource;
use App\Models\Auther;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AutherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new AutherCollection(Auther::all());
    }


    public function show(Auther $auther)
    {
        return new AutherResource($auther);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Auther $auther): Response
    {
        //
    }

}
