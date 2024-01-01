@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('css/stylVodopady.css') }}">



<h2 class="mt-2 nadpisy">Vodopády</h2>

    <div class="prazdnyPosunVodopadyKarticky"></div>

    <div class="container-fluid">
        @foreach($vodopady as $index => $vodopad)
            <div class="row justify-content-center vodopadyContainer">
                <div class="row text-center mb-3"></div>
                @if($index % 2 == 0)

                    <div class="row vodopad align-items-center">

                        <div class="col-lg-5 ">
                            <img src="{{asset($vodopad->obrazok)}}" class="img-fluid obrazokVodopady lavyObrazok" alt="Popis">
                        </div>
                        <div class="col-lg-7 stlpecSTextom kartickaVodopad">
                            <div>
                                <h2 class="mt-2 nadpisVodopadyKarticky">{{$vodopad->nazov}}</h2>

                                <p> {{$vodopad->text}}</p>
                            </div>

                            @auth
                                @if(Auth::user()->email == "adminadmin@gmail.com")
                                    <div class="row">
                                        <div class="col-lg-6 mb-6">
                                            <form method="POST" action="/vodopad/{{ $vodopad->id }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-primary aplikovatTlac align-content-center w-100">Zmazať príspevok</button>
                                            </form>
                                        </div>

                                        <div class="col-lg-6 mb-6">
                                            <a type="submit" class="btn btn-primary aplikovatTlac align-content-center w-100 " href="{{'/viewEditovaniePrispevkuVodopady/'.$vodopad->id}}">Editovanie príspevku</a>
                                        </div>
                                    </div>
                                @endif
                            @endauth

                        </div>
                    </div>


                @endif

                @if($index % 2 == 1)
                    <div class="row vodopad align-items-center">

                        <div class="col-lg-7 stlpecSTextom kartickaVodopad">
                            <div class="zaoblenieRohov">
                                <h2 class="mt-2 nadpisVodopadyKarticky">{{ $vodopad->nazov}}</h2>
                                <p> {{ $vodopad->text}}</p>
                            </div>

                            @auth
                                @if(Auth::user()->email == "adminadmin@gmail.com")
                                    <div class="row">
                                        <div class="col-lg-6 mb-6">
                                            <form method="POST" action="/vodopad/{{ $vodopad->id }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-primary aplikovatTlac align-content-center w-100">Zmazať príspevok</button>
                                            </form>
                                        </div>

                                        <div class="col-lg-6 mb-6">
                                            <a type="submit" class="btn btn-primary aplikovatTlac align-content-center w-100 " href="{{'/viewEditovaniePrispevku/'.$vodopad->id}}">Editovanie príspevku</a>
                                        </div>
                                    </div>
                                @endif
                            @endauth


                        </div>

                        <div class="col-lg-5 ">
                            <img src="{{asset($vodopad->obrazok)}}" class="img-fluid obrazokFerraty pravyObrazok" alt="Popis">
                        </div>
                    </div>



                @endif
            </div>
        @endforeach
    </div>
@endsection
