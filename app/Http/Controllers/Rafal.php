<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Rafal extends Controller
{
    public function index()
    {
        return view('Rafal.index');
    }

    public function roll()
    {
        return view('Rafal.roll');
    }
}
