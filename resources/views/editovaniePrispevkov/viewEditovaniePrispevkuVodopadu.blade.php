@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('css/stylUpravaDatabazy.css') }}">


<div class="container">
    <form class="formPridaniaDoDatabazy formPridanieVodopady" method="POST" action="/vodopadyEditacia">
        @csrf
        <input type="hidden" name="id" value="{{$vodopad->id}}">

        <label class="nadpisTabulky">PRIDANIE PRÍSPEVKU VODOPÁDU</label>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="nazov_vodopadu>">Názov vodopádu:</label>
                    <label for="nazov"></label><input type="text" class="form-control" id="nazov" name="nazov" placeholder='Názov vodopadu' value="{{$vodopad->nazov}}">
                </div>
                <div class="form-group">
                    <label for="obrazok">Obrázok:</label>
                    <label for="obrazok"></label><input type="text" class="form-control" id="obrazok" name="obrazok" placeholder='URL obrázka' value="{{$vodopad->obrazok}}">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group ">
                    <label for="text">Text:</label>
                    <label for="textVodopadu"></label><input type="text" class="form-control textFerraty" id="text" name="text" placeholder='zadajte text' value="{{$vodopad->text}}">
                </div>
            </div>
        </div>
        <button type="submit"  class="nav-item tlacitkoPridaniePrispevku">
            Editovať príspevok
        </button>
    </form>
</div>



















@endsection
