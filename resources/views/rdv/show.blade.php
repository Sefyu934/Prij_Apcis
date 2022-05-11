@extends('layout.base')

@section('content')
    <div class="p-5 mb-10 bg-secondary text-white">

        <h2 style="color: bisque">Informations</h2>
        <p>
            <span class="fw-bold" style="color: aquamarine">Date :</span> <i>{{ $rdv->date }}</i>
        </p>
        <p>
            <span class="fw-bold" style="color: aquamarine">Heure :</span> <i>{{ $rdv->heure }}</i>
        </p>
        <p>
            <span class="fw-bold" style="color: aquamarine">Début du rendez-vous :</span> <i>{{ $rdv->debut_heure }}</i>
        </p>
        <p>
            <span class="fw-bold" style="color: aquamarine">Fin du rendez-vous : </span> <i>{{ $rdv->fin_heure }}</i>
        </p>
        <p>
            <span class="fw-bold" style="color: aquamarine">Intervenant : </span> <i>{{ $rdv->intervenant }}</i>
        </p>
    </div>
    <p>
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a href="{{ route('jeune.show', $rdv->jeune) }}" class="btn btn-outline-dark">Retour au jeune</a>
        </li>
    </ul>
    </p>
@endsection
