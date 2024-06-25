<?php

namespace App\Http\Controllers;

use App\Models\PageCounter;
use Illuminate\Http\Request;
use SebastianBergmann\LinesOfCode\Counter;

class Rafal extends Controller
{
    public function index()
    {
        return view('Rafal.index');
    }

    public function roll()
    {
        // Attempt to find the counter by ID, or create a new one if it doesn't exist
        $counter = PageCounter::firstOrCreate(
            ['id' => 1], // The attributes to search for
            ['count' => 0] // The default values for creation
        );

        // Increment the count
        $counter->increment('count');

        // Save the changes to the database
        $counter->save();

        $amount = $counter->count;

        return view('Rafal.roll', compact('amount'));
    }

    public function demo1()
    {
        return view('demo1');
    }

    public function demo2()
    {
        return view('demo2');
    }

    public function demo3()
    {
        return view('demo3');
    }

    public function demo4()
    {
        return view('demo4');
    }

    public function ekimex()
    {
        return view('ekimex');
    }

    public function demo5()
    {
        return view('demo5');
    }
}
