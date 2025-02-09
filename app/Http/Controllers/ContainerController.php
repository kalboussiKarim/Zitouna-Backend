<?php

namespace App\Http\Controllers;

use App\Models\Container;
use App\Http\Requests\StoreContainerRequest;
use App\Http\Requests\UpdateContainerRequest;

class ContainerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContainerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Container $container)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContainerRequest $request, Container $container)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Container $container)
    {
        //
    }
}
