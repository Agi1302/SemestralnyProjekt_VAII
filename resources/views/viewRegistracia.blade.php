@extends('layouts.app')
@section('content')

    <link rel="stylesheet" href="{{ asset('css/registracia.css') }}">

    <div class="container ">
    <div class="row ">
        <form name="registruj" id="registruj" method="post"  action="{{ url('/zaregistruj') }}" class="col-xs-12 col-sm-12 col-md-12 formular">
            @csrf
            <h2>Vyplňte registráciu</h2>
            <div class="form-group">
                <label for="meno"></label>
                <input type="text" class="form-control" id="meno" placeholder="Zadajte meno *" name="meno" required>
            </div>

            <div class="form-group">
                <label for="priezvisko"></label>
                <input type="text" class="form-control" id="priezvisko" placeholder="Zadajte priezvisko *" name="priezvisko" required>
            </div>

            <div class="form-group">
                <label for="email"></label>
                <input type="email" class="form-control" id="email" placeholder="Zadajte email *" name="email" required>
            </div>
            <div class="form-group">
                <label for="heslo"></label>
                <input type="password" class="form-control" id="heslo" placeholder="Zadajte heslo *" name="heslo" required>
            </div>
            <div class="form-group">
                <label for="pwd2"></label>
                <input type="password" class="form-control" id="pwd2" placeholder="Potvrdenie hesla *" name="Rptpwd" >
            </div>
{{--            <div class="checkbox">--}}
{{--                <label for="remember" >  <span>Zapamätať prihlásenie</span> </label>--}}
{{--                <input type="checkbox" id="remember">--}}
{{--            </div>--}}
            <button type="submit" class="btn btn-success buttonPotvrdenie">POTVRDIŤ <i
                    class="glyphicon glyphicon-send buttonPotvrdenie"></i></button>
        </form>
    </div>
</div>

@endsection
