@extends('layouts.plantilla')

@section('principal')
    <div class="container-fluid">
    <br>
        <section class="row">
            <h1 class="regh1">Login</h1>
        </section>
        <section class="registro row">
            <article class="form regformulario col-xs-12 col-md-8 col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="regtitulo">{{ __('Resetear Contraseña') }}</h2><br>
                    </div>
                    <div class="">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn regboton">
                                        {{ __('Enviar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </article>
        </section>
    </div>
@endsection
