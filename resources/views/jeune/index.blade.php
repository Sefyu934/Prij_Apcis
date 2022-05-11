@extends('layout.base')

@section('content')

    <div class="container">
        <h1>Jeunes</h1>
        <a href="{{ route('jeune.create') }}" class="btn btn-info">Ajouter un jeune</a>
        <p></p>
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>N°</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Quartier prioritaire</th>
                <th>Date de Naissance</th>
                <th>Dernier ajout</th>
                <th>Dernière modification</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($jeunes as $key => $jeune)
                <tr>
                    <td>{{ $jeune->id }}</td>
                    <td>{{ $jeune->nom }}</td>
                    <td>{{ $jeune->prenom }}</td>
                    <td>{{ $jeune->qpv }}</td>
                    <td>{{ $jeune->date_naissance }}</td>
                    <td>{{ $jeune->created_at }}</td>
                    <td>{{ $jeune->updated_at }}</td>
                    <td>
                        <a href="{{ route('jeune.show', $jeune) }}" class="btn btn-primary">Afficher</a>
                        <a href="{{ route('jeune.edit', $jeune) }}" class="btn btn-success">Modifier</a>
                        <form action="{{ route('jeune.destroy', $jeune) }}" method="POST">
                            @method("DELETE")
                            @csrf
                            <button class="btn btn-danger" type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
