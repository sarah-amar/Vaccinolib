@extends('vaccins.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Modifier le vaccin</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-outline-primary" href="{{ route('vaccins.index') }}"> Retour</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oups! </strong> Il y a eu des problèmes avec votre entrée.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('vaccins.update',$vaccin->name) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Nom du vaccin:</strong>
                    <input type="text" name="name" value="{{ $vaccin->name }}"class="form-control" placeholder="Saisir le nom du vaccin">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Nombre de dose:</strong>
                    <input type="text" name="nb_dose" value="{{ $vaccin->nb_dose }}" class="form-control" placeholder="Saisir le nombre de dose">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Date d'expiration:</strong>
                    <input type="text" name="date_expiration" value="{{ $vaccin->date_expiration }}" class="form-control" placeholder="Saisir la date d'expiration">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center pt-4">
                <button type="submit" class="btn btn-primary">Soumettre</button>
            </div>
        </div>

    </form>
@endsection
