@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Pharmacy {{ __('Dashboard') }}</div>
                    <div class="card-body">
                        <h1>Welcome to your Pharmacy's Dashboard</h1>
                        <nav class="nav nav-tabs">
                            <a class="nav-item nav-link active" href="#p1" data-toggle="tab">Mon Profile</a>
                            <a class="nav-item nav-link" href="#p2" data-toggle="tab">Mes Infirmières</a>
                            <a class="nav-item nav-link" href="#p3" data-toggle="tab">Mes Documents</a>
                            <a class="nav-item nav-link" href="#p4" data-toggle="tab">Mes Vaccins</a>

                        </nav>

                        <div class="tab-content">
                            <div class="tab-pane active" id="p1">
                                @include('auth.adresse.adresse')
                            </div>
                            <div class="tab-pane" id="p2">
                                Panneau 2
                            </div>
                            <div class="tab-pane" id="p3">
                                Panneau 3
                            </div>
                            <div class="tab-pane" id="p4">
                                <p></p>
                                <a href="{{ route('vaccins.index') }}">
                                    <button type="btn" class="btn btn-primary">
                                        Gérer mes vaccins
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
