<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ClassementController extends Controller
{
    public function index()
    {
        $name_score= User::orderBy('score', 'desc')
        ->get();
        return view('classement', compact('name_score'));
    }

}
