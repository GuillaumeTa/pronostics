<?php

namespace App\Http\Controllers;

use App\classement;
use App\User;
use Illuminate\Http\Request;

class ClassementController extends Controller
{
    public function index()
    {
        $name_score= User::get();
        return view('classement', compact('name_score'));
    }

}
