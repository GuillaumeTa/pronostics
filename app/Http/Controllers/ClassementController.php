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

    public function create()
    {
        return view('classement');
    }

    public function store(Request $request) {
        $name_score = User::create($request->all());
        return redirect(route('classement.index', $name_score));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $name_score = User::findOrFail($id);

        return view('classement_edit', compact('name_score'));
    }

    public function update(Request $request, $id)
    {
        $name_score = User::findOrFail($id);

        $name_score->update($request->all());
        return redirect(route('classement.index', $id));
    }

    public function destroy($id)
    {
        //
    }
}
