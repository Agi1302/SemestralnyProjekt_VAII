@extends('layouts.app')
@section('content')

    <link rel="stylesheet" href="{{ asset('css/stylChaty.css') }}">



    <div class="prazdnyPosunChatyKarticky">

    </div>

    <div class="container mt-5">
        <div class="row justify-content-center odstavec">
            @foreach($chaty as $chata)
                <div class="container">

                    <div class="row text-center mb-3 prazdnyPosun"></div>

                    <div class="row">
                        <div class="col-12 col-md-5">
                            <div class="row-2" style="text-align: center;">
                                <p class="mt-2 kartickaNadpisy "></p>
                                <p class="mt-2 hlavnyNadpisChaty">{{$chata->nazov}}</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-7">
                            <iframe src="{{ $chata->url }}" class="mapaChaty" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 medzera">
                            <img src="{{asset('Obrazky/Chaty/'.$chata->obrazok)}}" class="img-fluid obrazokChaty" alt="Popis">
                        </div>
                        <div class="col-12 col-md-6 medzera">
                            <p class="mt-2 kartickaNadpisy"></p>
                            <p class="mt-2 textChaty">{{ $chata->text}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection





















