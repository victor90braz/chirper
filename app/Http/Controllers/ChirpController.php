<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;

class ChirpController extends Controller
{
    public function index(): View
    {
        return view('chirps.index');
    }

    public function store(Request $request) {
       // dd($request->all());
    }
}
