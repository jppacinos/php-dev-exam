<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Home page
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function index()
    {
        return view('index');
    }
}
