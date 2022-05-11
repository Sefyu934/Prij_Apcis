@extends('layout.base')

@section('content')
    <div class="card uper">
        <div class="card-header">
            <h1 style="color: dimgray">Modifier le rendez-vous</h1>
        </div>

        <div class="card-body">

            <form action="{{ route('rdv.update', $rdv) }}" method="POST">
                @method("PUT")

                @csrf

                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" id="nom" name="nom" value="{{ $jeune->nom }}">
                </div>

                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom" value="{{ $jeune->prenom }}">
                </div>

                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" id="date" name="date" value="{{ $rdv->date }}">
                </div>

                <div class="form-group">
                    <label for="heure">Heure</label>
                    <input type="time" id="heure" name="heure" value="{{ $rdv->heure }}">
                </div>
                <div class="form-group">
                    <label for="Rapport">Rapport</label>
                    <input type="text" id="rapport" name="rapport" value="{{ $rdv->rapport }}">
                </div>
                <div class="form-group">
                    <label for="depot">Dépôt</label>
                    <input type="file" id="depot" name="depot" value="{{ $rdv->depot }}">
                </div>
        </div>
        <button type="submit" class="btn btn-dark">Modifier</button>
    </div>
    </form>
@endsection
