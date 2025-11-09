<?php

namespace App\Http\Controllers;

class SampleDataController extends Controller
{
    public function sampledata()
    {
        $team = ['Alice', 'Bob', 'Charlie'];

        return view('sample', ['team' => $team]);
    }
}
            