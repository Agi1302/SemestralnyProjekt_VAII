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

    <div class="container  filtrovanie">

        <!-- Riadok s filtrami -->
        <div class="row">
            <!-- Filter: Typ túry -->
            <div class="col-xl-2 mb-3">
                <select class="form-select filtre" id="tourType">
                    <option selected>TYP TÚRY</option>
                    <option value="1">Horská túra</option>
                    <option value="3">Oddychová túra</option>
                </select>
            </div>

            <!-- Filter: Obtiažnosť -->
            <div class="col-xl-2 mb-3">
                <select class="form-select filtre" id="difficulty">
                    <option selected>NÁROČNOSŤ</option>
                    <option value="1">Ľahká</option>
                    <option value="2">Stredná</option>
                    <option value="3">Ťažká</option>
                </select>
            </div>

            <div class="col-xl-2 mb-3">
                <select class="form-select filtre" id="season">
                    <option selected>DOSTUPNÉ V ZIME</option>
                    <option value="ÁNO">ÁNO</option>
                    <option value="NIE">NIE</option>

                </select>
            </div>

            <!-- Filter: Dĺžka trasy -->
            <div class="col-xl-2 mb-3 ">
                <select class="form-select filtre" id="routeLength">
                    <option selected>DĹŽKA TRASY</option>
                    <option value="1">Do 5 km</option>
                    <option value="2">5 - 15 km</option>
                    <option value="3">Nad 15 km</option>
                </select>
            </div>

            <!-- Filter: Dostupnosť -->
            <div class="col-xl-2 mb-3">
                <select class="form-select filtre" id="availability">
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

        <!-- Riadok 1 -->
        <div class="row justify-content-center">

            <!-- Stĺpec 1 -->
            <div class="col-lg-4 mb-4">
                <div class="karticka">
                    <p class="mt-2 kartickaNadpisy">Lomnícky štít</p>
                    <img src="{{asset('Obrazky/LomnickyStit.jpg')}}" class="img-fluid" alt="Popis">
                    <p class="mt-2">Text pod obrázkom 1</p>
                </div>
            </div>

            <!-- Stĺpec 2 -->
            <div class="col-lg-4 mb-4">
                <div class="karticka">
                    <p class=" mt-2 kartickaNadpisy">Kriváň</p>
                    <img src="{{asset('Obrazky/Krivan.jpg')}}" class="img-fluid" alt="Popis">
                    <p class="mt-2">Text pod obrázkom 2</p>
                </div>
            </div>

            <!-- Stĺpec 3 -->
            <div class="col-lg-4 mb-4">
                <div class="karticka">
                    <p class="mt-2 kartickaNadpisy">Rysy</p>
                    <img src="{{asset('Obrazky/Rysy.jpg')}}" class="img-fluid" alt="Popis">
                    <p class="mt-2">Text pod obrázkom 3</p>
                </div>
            </div>
        </div>
    </div>




@endsection
