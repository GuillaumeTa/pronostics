<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\match;

class ResultatController extends Controller
{
    public function index()
    {
        $rslt= match::orderBy('id', 'desc')
        ->get();
        return view('resultat', compact('rslt'));
    }

    public function create()
    {
        return view('resultat');
    }

    public function store(Request $request) {
        $match = Match::create($request->all());
        return redirect(route('resultat.index', $match));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $match = Match::findOrFail($id);

        return view('resultat_edit', compact('match'));
    }

    public function update(Request $request, $id)
    {
        $match = Match::findOrFail($id);

        $match->update($request->all());
        return redirect(route('resultat.index', $id));
    }

    public function destroy($id)
    {
        //
    }
}
