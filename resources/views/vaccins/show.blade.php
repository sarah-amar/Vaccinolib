@extends('vaccins.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2> Afficher le vaccin</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-outline-primary" href="{{ route('vaccins.index') }}"> Retour</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom:</strong>
                {{ $vaccin->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre de dose:</strong>
                {{ $vaccin->nb_dose }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date d'expiration:</strong>
                {{ $vaccin->date_expiration }}
            </div>
        </div>
    </div>
@endsection
