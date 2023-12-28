@extends('layouts.app')
@section('content')

    <link rel="stylesheet" href="{{ asset('css/stylHlavnaStranka.css') }}">

    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    @if(session('uspesnePrihlasenie'))
        <div class="alert alert-success">
            {{ session('uspesnePrihlasenie') }}
        </div>
    @endif

    @if(session('uspesneZmazaniePrispevku'))
        <div class="alert alert-success">
            {{ session('uspesneZmazaniePrispevku') }}
        </div>
    @endif


    @if(session('neUspesneZmazaniePrispevku'))
        <div class="alert alert-success">
            {{ session('neUspesneZmazaniePrispevku') }}
        </div>
    @endif





    <div class="container  filtrovanie">

        <!-- Riadok s filtrami -->
        <div class="row">
            <!-- Filter: Typ túry -->
            <div class="col-xl-2 mb-3">
                <label for="tourType"></label><select class="form-select filtre" id="tourType">
                    <option selected>TYP TÚRY</option>
                    <option value="1">Horská túra</option>
                    <option value="3">Oddychová túra</option>
                </select>
            </div>

            <!-- Filter: Obtiažnosť -->
            <div class="col-xl-2 mb-3">
                <label for="difficulty"></label><select class="form-select filtre" id="difficulty">
                    <option selected>NÁROČNOSŤ</option>
                    <option value="1">Ľahká</option>
                    <option value="2">Stredná</option>
                    <option value="3">Ťažká</option>
                </select>
            </div>

            <div class="col-xl-2 mb-3">
                <label for="season"></label><select class="form-select filtre" id="season">
                    <option selected>DOSTUPNÉ V ZIME</option>
                    <option value="ÁNO">ÁNO</option>
                    <option value="NIE">NIE</option>

                </select>
            </div>

            <!-- Filter: Dĺžka trasy -->
            <div class="col-xl-2 mb-3 ">
                <label for="routeLength"></label><select class="form-select filtre" id="routeLength">
                    <option selected>DĹŽKA TRASY</option>
                    <option value="1">Do 5 km</option>
                    <option value="2">5 - 15 km</option>
                    <option value="3">Nad 15 km</option>
                </select>
            </div>

            <!-- Filter: Dostupnosť -->
            <div class="col-xl-2 mb-3">
                <label for="availability"></label><select class="form-select filtre" id="availability">
                    <option selected>DOSTUPNOSŤ</option>
                    <option value="1">Bez horského vodcu</option>
                    <option value="2">S horským vodcom</option>
                </select>
            </div>
            <!-- Tlačidlo na aplikovanie filtrov -->
            <div class="text-center col-xl-2 mb-3">
                <button type="button" class="btn btn-primary aplikovatTlac">Aplikovať</button>
            </div>

        </div>

    </div>


    <div class="container mt-5">
        <div class="row justify-content-center">
            @foreach($vrcholy as $vrchol)
                <div class="col-lg-4 mb-4">
                    <div class="karticka">

                        <form method="POST" action="{{ route('favourite.pridanieOdobranieFavourite', $vrchol) }}" class="favourite-form">
                            @csrf
                            @auth
                                <button type="submit" class="srdiecko">

                                        <i class="bi bi-heart"></i>
                                </button>
                            @endauth
                        </form>


                        <p class="mt-2 kartickaNadpisy">{{$vrchol->nazov_vrchola}}</p>
                        <img src="{{asset('Obrazky/Vrcholy/'.$vrchol->obrazok)}}" class="img-fluid" alt="Popis">
                        <p class="mt-2">Názov vrcholu: {{ $vrchol->nazov_vrcholu}}</p>
                        <p class="mt-2">Štát: {{ $vrchol->stat}}</p>
                        <p class="mt-2">Okres: {{ $vrchol->okres}}</p>
                        <p class="mt-2">Nadmorská výška: {{ $vrchol->nadmorska_vyska}}</p>
                        <p class="mt-2">Pohorie: {{ $vrchol->pohorie}}</p>

                        @auth
                            @if(Auth::user()->email == "adminadmin@gmail.com")
                                <div class="row">
                                    <div class="col-lg-6 mb-6">
                                        <form method="POST" action="/vrchol/{{ $vrchol->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-primary aplikovatTlac align-content-center w-100">Zmazať príspevok</button>
                                        </form>
                                    </div>

                                    <div class="col-lg-6 mb-6">
                                        <a type="submit" class="btn btn-primary aplikovatTlac align-content-center w-100 " href="{{'/viewEditovaniePrispevku/'.$vrchol->id}}">Editovanie príspevku</a>
                                    </div>
                                </div>
                            @endif
                        @endauth
                    </div>
                </div>
            @endforeach
        </div>
@endsection
