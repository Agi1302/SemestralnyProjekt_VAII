@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('css/stylQ&A.css') }}">



<div class="container-fluid">
    <div class="row">

        <div class="col-md-8  order-2 order-md-1 ">

            <div class="prazdnyPosun"></div>


            @foreach($otazky as $otazka)
                <div class="card mb-3 odstavec1">
                    <div class="card mb-3 odstavec2">
                        <div class="row text-center mb-3 "></div>

                        <div>
                            <p class="posunTextu">{{$otazka->user->meno}} : {{$otazka->textOtazky}} </p>


                            @if(!Auth::check() || Auth::user()->email != "adminadmin@gmail.com")
                                <p class="posunTextu">ADMIN: {{ $otazka->textOdpovede}}</p>
                            @endif
                        </div>
                    </div>

                    <div>
                        @auth
                            @if(Auth::user()->is_admin())
                                <form name="prihlasenie" id="prihlasenie" method="POST" action="/editujOtazku/{{$otazka->id}}" class="col-xs-12 col-sm-12 col-md-12 formular">
                                    @csrf
                                    <label for="textOdpovede"></label>
                                    <textarea class="textOdpovede" id="textOdpovede" name="textOdpovede" required>{{$otazka->textOdpovede}}</textarea>
                                    <button type="submit" class="btn btn-success buttonPotvrdenieOdpovede">PRIDAŤ ODPOVEĎ</button>
                                </form>
                            @endif
                        @endauth
                    </div>
                </div>
            @endforeach


        </div>

        @auth
            @if(Auth::user()->email != "adminadmin@gmail.com")
            <div class="col-md-4 fixed-md order-1 order-md-2 ">
                <div class="otazkoveOkno">
                    <form class="vnutorneOknoFormu" name="prihlasenie" id="prihlasenie" method="post"  method="POST" action="/pridajOtazku" class="col-xs-12 col-sm-12 col-md-12 formular">
                        @csrf
                        <input type="hidden" name="idPouzivatela" value="{{ Auth::id() }}">
                        <h2 class="vlozenieOtazky">Vložiť otázku</h2>
                        <div class="form-group textikOdpovede">

                            <label for="textOtazky"></label><textarea class="form-control " id="textOtazky" placeholder="Zadajte text otazky" name="textOtazky" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-success buttonPotvrdenie">PRIDAŤ OTÁZKU
                            <i class="glyphicon glyphicon-send buttonPotvrdenie"></i>
                        </button>
                    </form>
                </div>
            </div>
            @endif
        @endauth
</div>
@endsection
