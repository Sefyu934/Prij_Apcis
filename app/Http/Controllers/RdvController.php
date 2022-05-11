<?php

namespace App\Http\Controllers;

use App\Models\Jeune;
use App\Models\rdv;
use Illuminate\Http\Request;

class RdvController extends Controller
{
    public function create()
    {
        return view('rdv.create');
    }

    public function store(Request $request)
    {

        $rdv = rdv::create([
            'date' => $request->get('date'),
            'heure' => $request->get('heure'),
            'debut_heure' => $request->get('debut_heure'),
            'fin_heure' => $request->get('fin_heure'),
            'rapport' => $request->get('rapport')
        ]);

        return redirect(route('rdv.show', $rdv));
    }

    public function show(rdv $rdv)
    {
        return view('rdv.show', compact('rdv'));
    }

    public function edit(rdv $rdv)
    {
        return view('rdv.edit', compact('rdv'));
    }

    public function update(Request $request, rdv $rdv)
    {
        $rdv = rdv::update([
            'date' => $request->get('date'),
            'heure' => $request->get('heure'),
            'debut_heure' => $request->get('debut_heure'),
            'fin_heure' => $request->get('fin_heure'),
            'intervenant' => $request->get('intervenant'),
            'jeune_id' => $request->get('jeune_id')
        ]);

        return redirect(route('rdv.show', $rdv));
    }

    public function destroy(rdv $rdv)
    {
        $rdv->delete();
        return redirect(route('jeune.show'));
    }
}
