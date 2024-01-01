@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('css/stylFerraty.css') }}">


<!-- Popis ferrat-->

<h2 class="mt-2 nadpisy">Ferraty</h2>

<div class="prazdnyPosunFerratyKarticky"></div>


<div class="container">
    @foreach($ferraty as $index => $ferrata)
        <div class="row justify-content-center">
            <div class="row text-center mb-3 prazdnyPosun"></div>
               @if($index % 3 == 0)
                    <div class="row  odstavec">
                        <div class="col-md-4 mb-4 d-flex align-items-center">
                            <img src="{{asset('Obrazky/Ferraty/'.$ferrata->obrazok)}}" class="img-fluid obrazokFerraty" alt="Popis">
                        </div>

                        <div class="col-md-8 mb-8 d-flex align-items-center">
                            <div class="row-2">
                                <p class="mt-2 kartickaNadpisy">{{ $ferrata->nazov}}</p>
                                <p> {{ $ferrata->text}}</p>
                            </div>
                        </div>

                        @auth
                            @if(Auth::user()->email == "adminadmin@gmail.com")
                                <div class="row">
                                    <div class="col-lg-6 mb-6">
                                        <form method="POST" action="/ferrata/{{ $ferrata->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-primary aplikovatTlac align-content-center w-100">Zmazať príspevok</button>
                                        </form>
                                    </div>

                                    <div class="col-lg-6 mb-6">
                                        <a type="submit" class="btn btn-primary aplikovatTlac align-content-center w-100 " href="{{'/viewEditovaniePrispevkuFerraty/'.$ferrata->id}}">Editovanie príspevku</a>
                                    </div>
                                </div>
                            @endif
                        @endauth
                    </div>
               @endif

                @if($index % 3 == 1)
                    <div class="row align-items-center odstavec">
                        <div class="col-md-8 mb-8 d-flex align-items-center">
                            <div class="row-2">
                                <p class="mt-2 kartickaNadpisy">{{ $ferrata->nazov}}</p>
                                <p> {{ $ferrata->text}}</p>
                            </div>
                        </div>

                        <div class="col-md-4 mb-4 d-flex align-items-center">
                            <img src="{{asset('Obrazky/Ferraty/'.$ferrata->obrazok)}}" class="img-fluid obrazokFerraty" alt="Popis">
                        </div>

                        @auth
                            @if(Auth::user()->email == "adminadmin@gmail.com")
                                <div class="row">
                                    <div class="col-lg-6 mb-6">
                                        <form method="POST" action="/ferrata/{{ $ferrata->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-primary aplikovatTlac align-content-center w-100">Zmazať príspevok</button>
                                        </form>
                                    </div>

                                    <div class="col-lg-6 mb-6">
                                        <a type="submit" class="btn btn-primary aplikovatTlac align-content-center w-100 " href="{{'/viewEditovaniePrispevkuFerraty/'.$ferrata->id}}">Editovanie príspevku</a>
                                    </div>
                                </div>
                            @endif
                        @endauth

                    </div>
                @endif

            @if($index % 3 == 2)
                <div class="row align-items-center odstavec">

                    <div class="col-md-4 mb-4 d-flex align-items-center">
                        <img src="{{asset('Obrazky/Ferraty/'.$ferrata->obrazok)}}" class="img-fluid obrazokFerraty" alt="Popis">
                    </div>

                    <div class="col-md-4 mb-4 d-flex align-items-center">
                        <div class="row-2">
                            <p class="mt-2 kartickaNadpisy">{{ $ferrata->nazov}}</p>
                            <p> {{ $ferrata->text}}</p>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4 d-flex align-items-center">
                        <img src="{{asset('Obrazky/Ferraty/'.$ferrata->obrazok)}}" class="img-fluid obrazokFerraty" alt="Popis">
                    </div>

                    @auth
                        @if(Auth::user()->email == "adminadmin@gmail.com")
                            <div class="row">
                                <div class="col-lg-6 mb-6">
                                    <form method="POST" action="/ferrata/{{ $ferrata->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-primary aplikovatTlac align-content-center w-100">Zmazať príspevok</button>
                                    </form>
                                </div>

                                <div class="col-lg-6 mb-6">
                                    <a type="submit" class="btn btn-primary aplikovatTlac align-content-center w-100 " href="{{'/viewEditovaniePrispevkuFerraty/'.$ferrata->id}}">Editovanie príspevku</a>
                                </div>
                            </div>
                        @endif
                    @endauth
                </div>
            @endif



        </div>
    @endforeach
</div>
@endsection




