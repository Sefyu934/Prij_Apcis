@extends('layout.base')

@section('content')

    <div class="card uper">
        <div class="card-header">
            <h1 style="color: dimgray">Ajout d'un jeune</h1>
        </div>

        <div class="card-body">


    <form action="/jeunes/store" method="POST">

        @csrf

        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" id="nom" name="nom">
        </div>

        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" id="prenom" name="prenom">
        </div>

        <div class="form-group">
            <label for="sexe">Sexe</label>
            <input type="text" id="sexe" name="sexe">
        </div>

        <div class="form-group">
            <label for="date_naissance">Date de naissance</label>
            <input type="date" id="date_naissance" name="date_naissance">
        </div>

        <div class="form-group">
            <label for="qpv">Quartier prioritaire</label>
            <input type="checkbox" id="qpv" name="qpv">
        </div>
        </div>
        <button type="submit" class="btn btn-info">Ajouter</button>
    </div>
    </form>

@endsection


