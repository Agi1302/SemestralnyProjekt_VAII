@extends('layouts.app')
@section('content')

    <link rel="stylesheet" href="{{ asset('css/registracia.css') }}">



    <div class="container ">
    <div class="row ">
        <form action="/action_page.php" class="col-xs-12 col-sm-12 col-md-12 formular">
            <h2>Vyplňte registráciu</h2>
            <div class="form-group">
                <input type="text" class="form-control" id="name" placeholder="Zadajte meno *" name="name" required>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="surname" placeholder="Zadajte priezvisko *"
                       name="secondName" required>
            </div>

            <div class="form-group">
                <input type="email" class="form-control" id="email" placeholder="Zadajte email *" name="email" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="pwd" placeholder="Zadajte heslo *" name="pwd" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="pwd2" placeholder="Potvrdenie hesla *" name="Rptpwd"
                       required>
            </div>
            <div class="checkbox">
                <label><input type="checkbox" name="remember"> <span>Zapamätať prihlásenie</span></label>
            </div>
            <button type="submit" class="btn btn-success buttonPotvrdenie">POTVRDIŤ <i
                    class="glyphicon glyphicon-send buttonPotvrdenie"></i></button>
        </form>
    </div>
</div>

@endsection
