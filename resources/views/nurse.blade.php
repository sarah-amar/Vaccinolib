@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Nurse {{ __('Dashboard') }}</div>
                    <div class="card-body">
                        <h1>Welcome to your Nurse's Dashboard</h1>
                        <nav class="nav nav-tabs">
                            <a class="nav-item nav-link active" href="#p1" data-toggle="tab">Mon Profile</a>
                            <a class="nav-item nav-link" href="#p2" data-toggle="tab">Mes Vaccins</a>
                            <a class="nav-item nav-link" href="#p3" data-toggle="tab">Mes Documents</a>
                            <a class="nav-item nav-link" href="#p4" data-toggle="tab">Mon Planning</a>

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
                                <a href="{{ url('/fullcalender') }}">
                                    <button type="btn" class="btn btn-primary">
                                        Gérer mon Planning
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
