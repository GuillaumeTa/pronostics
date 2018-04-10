<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pronostics;

class PronosticsController extends Controller
{
    public function index(){
        return view('pronostics');
    }
}