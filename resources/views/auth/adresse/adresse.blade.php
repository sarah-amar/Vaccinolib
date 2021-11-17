<div>
    <p></p>
    <form method="POST" action='#' aria-label="Contact {{__('Register')}}">
        @csrf
        {{-- Telephone--}}
        <div class="form-group row">
            <label for="telephone" class="col-md-4 col-form-label text-md-right">{{ __('NºTelephone') }}</label>

            <div class="col-md-6">
                <input id="telephone" type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone" autofocus>

                @error('telephone')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                @enderror
            </div>
        </div>
        {{-- Siret--}}
        <div class="form-group row">
            <label for="n_siret" class="col-md-4 col-form-label text-md-right">{{ __('NºSiret') }}</label>

            <div class="col-md-6">
                <input id="n_siret" type="text" class="form-control @error('n_siret') is-invalid @enderror" name="n_siret" value="{{ old('n_siret') }}" required autocomplete="n_siret" autofocus>

                @error('n_siret')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                @enderror
            </div>
        </div>
        {{-- Adresse--}}
        <div class="form-group row">
            <label for="adresse" class="col-md-4 col-form-label text-md-right">{{ __('Adresse') }}</label>

            <div class="col-md-6">
                <input id="adresse" type="text" class="form-control @error('adresse') is-invalid @enderror" name="adresse" value="{{ old('adresse') }}" required autocomplete="adresse" autofocus>

                @error('adresse')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                @enderror
            </div>
        </div>
        {{-- CP--}}
        <div class="form-group row">
            <label for="cp" class="col-md-4 col-form-label text-md-right">{{ __('CP') }}</label>

            <div class="col-md-6">
                <input id="cp" type="text" class="form-control @error('cp') is-invalid @enderror" name="cp" value="{{ old('cp') }}" required autocomplete="cp" autofocus>

                @error('cp')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                @enderror
            </div>
        </div>
        {{-- Ville--}}
        <div class="form-group row">
            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('Ville') }}</label>

            <div class="col-md-6">
                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" autofocus>

                @error('city')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                @enderror
            </div>
        </div>
        {{-- submit--}}
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>
</div>

