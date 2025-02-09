<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function store(Request $request)
    {
        return response()->json(['message' => 'Worker created'], 201);
    }
}
