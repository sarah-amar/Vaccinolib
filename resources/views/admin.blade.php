@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin {{ __('Dashboard') }}</div>
                    <div class="card-body">
                        <h1>Welcome to your Admin's Dashboard</h1>
                        <p class="text-center">Your are a Bad Ass</p>
                        <nav class="nav nav-tabs">
                            <a class="nav-item nav-link active" href="#p1" data-toggle="tab">Onglet 1</a>
                            <a class="nav-item nav-link" href="#p2" data-toggle="tab">Onglet 2</a>
                        </nav>

                        <div class="tab-content">
                            <div class="tab-pane active" id="p1">Panneau 1</div>
                            <div class="tab-pane" id="p2">Panneau 2</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
