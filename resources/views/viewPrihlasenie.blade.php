@extends('layouts.app')
@section('content')

    <link rel="stylesheet" href="{{ asset('css/registracia.css') }}">

    <div class="container ">
        <div class="row ">
            <form name="prihlasenie" id="prihlasenie" method="post"  action="{{ url('/prihlasenie') }}" class="col-xs-12 col-sm-12 col-md-12 formular">
                @csrf
                <h2>Prihlásenie</h2>
                <div class="form-group">

                    <label for="email"></label>
                    <input type="email" class="form-control" id="email" placeholder="Zadajte email *" name="email" required>
                </div>
                <div class="form-group">
                    <label for="heslo"></label>
                    <input type="password" class="form-control" id="heslo" placeholder="Zadajte heslo *" name="heslo" required>
                </div>

                <button type="submit" class="btn btn-success buttonPotvrdenie">POTVRDIŤ
                    <i class="glyphicon glyphicon-send buttonPotvrdenie"></i>
                </button>
            </form>

            <a class="btn btn-success buttonRegistracia" href="/registracia">ZAREGISTROVAŤ SA
                <i class="glyphicon glyphicon-send buttonPotvrdenie"></i>
            </a>

        </div>
    </div>

@endsection
