<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pronostics;

class PronosticsController extends Controller
{
    public function index()
    {
        return view('pronostics');
    }
    
    public function create(){
        $scores = Pronostics::insert('INSERT INTO pronostic (id, id_user, id_match, score_equipe_1, score_equipe_2)
                                VALUES (?, ?, ?, ?, ?)');
    }
}
