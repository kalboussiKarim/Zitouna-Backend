<?php

namespace App\Http\Controllers;

use App\Models\CommandStep;
use App\Http\Requests\StoreCommandStepRequest;
use App\Http\Requests\UpdateCommandStepRequest;

class CommandStepController extends Controller
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
    public function store(StoreCommandStepRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CommandStep $commandStep)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommandStepRequest $request, CommandStep $commandStep)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CommandStep $commandStep)
    {
        //
    }
}
