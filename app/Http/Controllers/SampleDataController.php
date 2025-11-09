<?php

namespace App\Http\Controllers;

class SampleDataController extends Controller
{
    public function about()
    {
        $team = ['Alice', 'Bob', 'Charlie'];

        return view('about', ['team' => $team]);
    }
}
            