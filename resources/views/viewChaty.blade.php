@extends('layouts.app')
@section('content')

    <link rel="stylesheet" href="{{ asset('css/stylChaty.css') }}">


    <h2 class="mt-2 nadpisy">Chaty</h2>
    <div class="prazdnyPosunChatyKarticky">

    </div>


            @foreach($chaty as $chata)
                <div class="card mb-3 odstavec">

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

                    @auth
                        @if(Auth::user()->email == "adminadmin@gmail.com")
                            <div class="row">
                                <div class="col-lg-6 mb-6">
                                    <form method="POST" action="/chata/{{ $chata->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-primary aplikovatTlac align-content-center w-100">Zmazať príspevok</button>
                                    </form>
                                </div>

                                <div class="col-lg-6 mb-6">
                                    <a type="submit" class="btn btn-primary aplikovatTlac align-content-center w-100 " href="{{'/viewEditovaniePrispevku/'.$chata->id}}">Editovanie príspevku</a>
                                </div>
                            </div>
                        @endif
                    @endauth


                </div>
            @endforeach
@endsection




















