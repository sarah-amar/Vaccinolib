@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }} {{isset($url) ? ucwords($url) : ""}}</div>

                <div class="card-body">
                    @isset($url)
                        @if ($url === 'nurse')
                            @include('auth.Register.nurse')
                        @endif
                        @if ($url === 'pharm')
                            @include('auth.Register.pharm')
                        @endif
                    @else
                        @include('auth.Register.user')
                    @endisset
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
