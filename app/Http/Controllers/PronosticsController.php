<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pronostics;
use App\match;

class PronosticsController extends Controller
{

    public function index()
    {
        $pronos = Pronostics::get();
        $match = match::orderBy('id', 'desc')
        ->get();
        return view('pronostics', compact('match', 'pronos'));
    }

    public function create()
    {
        return view('pronostics');
    }

    public function store(Request $request)
    {
        $prono = Pronostics::create($request->all());
        return view('succesVote', $prono);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

