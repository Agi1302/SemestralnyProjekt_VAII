@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('css/stylUpravaDatabazy.css') }}">


<div class="container">
    <div class="row">
        <!-- Navigačný panel -->
        <div class="col-lg-8 ">

            <form class="formPridaniaDoDatabazy formPridanie" method="POST" action="{{ route('vrcholy.store') }}">
                @csrf
                <label class="nadpisTabulky1">PRIDANIE PRÍSPEVKU</label>
                <div class="form-group">
                    <label for="nazov_vrcholu">Názov vrcholu:</label>
                    <input type="text" class="form-control" id="nazov_vrcholu" name="nazov_vrcholu" placeholder='vrchol názov'>
                </div>
                <div class="form-group">
                    <label for="nazov_vrcholu">Štát:</label>
                    <label for="stat"></label><input type="text" class="form-control" id="stat" name="stat" placeholder='štát'>
                </div>

                <div class="form-group">
                    <label for="region">Okres:</label>
                    <input type="text" class="form-control" id="okres" name="okres" placeholder='názov okresu'>
                </div>


                <div class="form-group">
                    <label for="nadmorska_vyska_vrcholu">Nadmorská výška vrcholu:</label>
                    <input type="text" class="form-control" id="nadmorska_vyska_vrcholu" name="nadmorska_vyska_vrcholu" placeholder='m.n.m'>
                </div>

                <div class="form-group">
                    <label for="pohorie">Pohorie:</label>
                    <input type="text" class="form-control" id="pohorie" name="pohorie" placeholder='názov pohoria'>
                </div>

                <div class="form-group">
                    <label for="region">Najľahší výstup z:</label>
                    <input type="text" class="form-control" id="vystup_z" name="vystup_z" placeholder='najľahší výstup z'>
                </div>

                <button type="submit"  class="nav-item tlacitkoZmenaHesla">
                    Pridať príspevok
                </button>
            </form>
        </div>

        <div class="col-lg-4 ">

            <form class="formPridaniaDoDatabazy  ">
                <label class="nadpisTabulky2">ZMAZANIE PRÍSPEVKU</label>
                <div class="form-group">
                    <label for="firstName">Názov vrcholu:</label>
                    <input type="text" class="form-control" id="firstName" placeholder='vrchol názov'>
                </div>


                <button class="nav-item tlacitkoZmenaHesla">
                    <a href="/nieco" class="nav-link text-white">
                        <i></i> Zmazať príspevok
                    </a>
                </button>
            </form>
        </div>



    </div>
</div>










@endsection
