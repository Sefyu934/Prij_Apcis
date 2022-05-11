<?php

namespace App\Http\Controllers;

use App\Models\Jeune;
use App\Models\Rdv;
use Illuminate\Http\Request;

class JeuneController extends Controller
{

    public function index()
    {
        $jeunes = Jeune::all();

        return view('jeune.index', compact('jeunes'));
    }

    public function create()
    {
        return view('jeune.create');
    }

    public function store(Request $request)
    {

        $jeune = Jeune::create([
            'nom' => $request->get('nom'),
            'prenom' => $request->get('prenom'),
            'sexe' => $request->get('sexe'),
            'date_naissance' => $request->get('date_naissance')
        ]);

        return redirect(route('jeune.show', $jeune));

    }

    public function show(Jeune $jeune)
    {
        return view('jeune.show', compact('jeune'));
    }

    public function edit(Jeune $jeune)
    {
        return view('jeune.edit', compact('jeune'));
    }

    public function update(Request $request, Jeune $jeune)
    {
        $jeune->update([
            'nom' => $request->get('nom'),
            'prenom' => $request->get('prenom'),
            'sexe' => $request->get('sexe'),
            'date_naissance' => $request->get('date_naissance')
        ]);

        return redirect(route('jeune.show', $jeune));
    }

    public function destroy(Jeune $jeune)
    {
        $jeune->delete();
        return redirect(route('jeune.index'));
    }
}
