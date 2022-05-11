@extends('layout.base')

@section('content')

    <div class="card uper">
        <div class="card-header">
            <h1 style="color: dimgray">Ajout d'un rendez-vous</h1>
        </div>

        <div class="card-body">


            <form action="/rdvs/store" method="POST">

                @csrf
                @include('includes.errors')
                    <div class="form-group">
                        <label for="name">Nom : </label>
                        <input type="hidden" id="jeune_id" name="jeune_id" value="{{ $jeune->id }}">
                    </div>
                    <div class="form-group">
                        <label for="heure">Date / Heure : </label>
                        <input type="datetime-local" id="heure" name="heure" value="{{$rdv->date}} {{ $rdv->heure }}">
                    </div>
                    <div class="form-group">
                        <label for="rapport">Rapport :</label>
                        <input type="text" id="rapport" name="rapport" value="{{ $rdv->rapport }}">
                    </div>
            </div>
            <button type="submit" class="btn btn-info">Ajouter</button>
        </div>
        </form>
@endsection
