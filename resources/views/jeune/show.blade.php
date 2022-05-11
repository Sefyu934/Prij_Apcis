@extends('layout.base')

@section('content')
        <div class="p-5 mb-10 bg-secondary text-white">
            <h1><b style="color: #e3f2fd">{{ $jeune->nom }} {{ $jeune->prenom }}</b></h1>

            <h2 style="color: bisque">Informations</h2>
            <p>
                <span class="fw-bold" style="color: aquamarine">Sexe :</span> <i>{{ $jeune->sexe }}</i>
            </p>
            <p>
                <span class="fw-bold" style="color: aquamarine">Quartier prioritaire :</span> <i>{{ $jeune->qpv }}</i>
            </p>
            <p>
                <span class="fw-bold" style="color: aquamarine">Statut :</span> <i>{{ $jeune->statut }}</i>
            </p>
            <p>
                <span class="fw-bold" style="color: aquamarine">Adresse : </span> <i>{{ $jeune->cp }} {{ $jeune->ville }}</i>
            </p>
        </div>
    <p>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a href="{{ route('jeune.index') }}" class="btn btn-outline-dark">Retour au menu</a>
            </li>
        </ul>
    </p>

        <div class="container">
            <h2>Rendez-vous</h2>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Date</th>
                        <th>Heure</th>
                        <th>Intervenant</th>
                        <th>Nb Pièce jointes</th>
                        <th>Dernière modification</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jeune->rdvs as $key => $rdv)
                        <tr>
                            <th>{{ $key + 1 }}</th>
                            <th>{{ $rdv->date }}</th>
                            <th>{{ $rdv->heure }}</th>
                            <th>{{ $rdv->intervenant }}</th>
                            <th>{{ $rdv->depot }}</th>
                            <th>{{ $rdv->updated_at }}</th>
                            <th>
                                <a href="{{ route('rdv.show', $rdv) }}" class="btn btn-outline-dark">Afficher le rdv</a>
                                <a href="{{ route('rdv.create', $rdv) }}" class="btn btn-info">Ajouter le rdv</a>
                                <form action="{{ route('rdv.destroy', $rdv) }}" method="POST">
                                    @method("DELETE")
                                    @csrf
                                    <button class="btn btn-outline-dark" type="submit">Supprimer le rdv</button>
                                </form>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

@endsection
