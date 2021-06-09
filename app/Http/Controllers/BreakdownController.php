<?php

namespace App\Http\Controllers;

use App\Models\Breakdown;

class BreakdownController extends Controller
{
    /**
     * Display all breakdowns
     *
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function index()
    {
        return \response()->json(Breakdown::all());
    }
}
