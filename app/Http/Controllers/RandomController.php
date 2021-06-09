<?php

namespace App\Http\Controllers;

use App\Models\Random;

class RandomController extends Controller
{
    /**
     * Display all randoms
     *
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function index()
    {
        return \response()->json(Random::all());
    }
}
