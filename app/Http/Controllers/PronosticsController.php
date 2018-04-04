<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PronosticsController extends Controller
{
    public function index()
    {
        return view('pronostics');
    }
}
