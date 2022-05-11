@extends('layout.base')

@section('content')

    <div class="card uper">
        <div class="card-header">
            <h1 style="color: dimgray">Modifier le jeune</h1>
        </div>

        <div class="card-body">

    <form action="{{ route('jeune.update', $jeune) }}" method="POST">
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
            <label for="sexe">Sexe</label>
            <input type="text" id="sexe" name="sexe" value="{{ $jeune->sexe }}">
        </div>

        <div class="form-group">
            <label for="date_naissance">Date de naissance</label>
            <input type="date" id="date_naissance" name="date_naissance" value="{{ $jeune->date_naissance }}">
        </div>
        </div>
            <button type="submit" class="btn btn-dark">Modifier</button>
            <a href="{{ route('rdv.edit') }}" class="btn btn-outline-dark">Modifier le rendez-vous</a>
    </div>
    </form>
@endsection
