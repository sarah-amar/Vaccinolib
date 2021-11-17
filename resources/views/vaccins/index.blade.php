@extends('vaccins.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Mettre à jour le stock de vaccin</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-outline-success" href="{{ route('vaccins.create') }}"> Créer un nouveau vaccin</a>
                <a class="btn btn-outline-success" href="/pharm">HomePage</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Nom du vaccin</th>
            <th>Nombre de dose</th>
            <th>Date d'expiration</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($vaccins ?? '' as $vaccin)
            <tr>

                <td>{{ $vaccin->name }}</td>
                <td>{{ $vaccin->nb_dose }}</td>
                <td>{{ $vaccin->date_expiration }}</td>
                <td>
                    <form action="{{ route('vaccins.destroy',$vaccin->name) }}" method="POST">

                        <a class="btn btn-outline-primary" href="{{ route('vaccins.show',$vaccin->name) }}">Montrer</a>

                        <a class="btn btn-outline-success" href="{{ route('vaccins.edit',$vaccin->name) }}">Éditer</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="d-flex justify-content-center pagination-lg">
        {!! $vaccins ?? ''->links('pagination::bootstrap-4') !!}
    </div>
@endsection
