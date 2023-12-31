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
                                <h2 class="mt-2 nadpisVodopadyKarticky">{{ $vodopad->nazov}}</h2>

                                <p> {{ $vodopad->text}}</p>
                            </div>
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
