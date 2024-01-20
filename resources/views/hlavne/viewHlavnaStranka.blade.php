@extends('layouts.app')
@section('content')

    <link rel="stylesheet" href="{{ asset('css/stylHlavnaStranka.css') }}">

    @if(session('status'))
        <div class="alert alert-success chyboveHlasenia">
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

    <div class="prazdnyPosun">

    </div>



    <div class="container mt-5">
        <div class="row justify-content-center">
            @foreach($vrcholy as $vrchol)
                <div class="col-lg-4 mb-4">
                    <div class="karticka">

                        <p class="mt-2 kartickaNadpisy">{{$vrchol->nazov_vrchola}}</p>
                        <img src="{{asset('Obrazky/Vrcholy/'.$vrchol->obrazok)}}" class="img-fluid" alt="Popis">
                        <p class="mt-2">Názov vrcholu: {{ $vrchol->nazov_vrcholu}}</p>
                        <p class="mt-2">Štát: {{ $vrchol->stat}}</p>
                        <p class="mt-2">Okres: {{ $vrchol->okres}}</p>
                        <p class="mt-2">Nadmorská výška: {{ $vrchol->nadmorska_vyska}}</p>
                        <p class="mt-2">Pohorie: {{ $vrchol->pohorie}}</p>

                        <div class="d-flex justify-content-end ">

                            <form method="POST"    class="absolvovane-form dolnaIkonaPrava">
                                @csrf
                                @auth
                                    <button type="submit" class="fajocka" data-url="/absolvovane/pridanieOdobranieAbsolvovane/{{ $vrchol->id }}">
                                        @if($vrchol->done_by_user)
                                            <i class="bi bi-check2-all" style="color: #4790e5"></i>
                                        @else
                                            <i class="bi bi-check2"></i>
                                        @endif
                                    </button>
                                @endauth
                            </form>

                            <form method="POST"    class="favourite-form dolnaIkonaLava">
                                @csrf
                                @auth
                                    <button type="submit" class="srdiecko" data-url="/favourite/pridanieOdobranieFavourite/{{ $vrchol->id }}">
                                        @if($vrchol->liked_by_user)
                                            <i class="bi bi-suit-heart-fill" style="color: #4790e5"></i>
                                        @else
                                            <i class="bi bi-suit-heart"></i>
                                        @endif
                                    </button>
                                @endauth
                            </form>

                        </div>

                        @auth
                            @if(Auth::user()->is_admin())
                                <div class="row">
                                    <div class="col-lg-6 mb-6">
                                        <form method="POST" action="/vrchol/{{ $vrchol->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-primary aplikovatTlac align-content-center w-100">Zmazať príspevok</button>
                                        </form>
                                    </div>

                                    <div class="col-lg-6 mb-6">
                                        <a type="submit" class="btn btn-primary aplikovatTlac align-content-center w-100 " href="{{'/viewEditovaniePrispevkuVrcholu/'.$vrchol->id}}">Editovanie príspevku</a>
                                    </div>
                                </div>
                            @endif
                        @endauth
                    </div>
                </div>
            @endforeach
        </div>
@endsection
