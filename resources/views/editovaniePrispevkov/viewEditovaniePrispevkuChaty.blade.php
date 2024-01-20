@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('css/stylUpravaDatabazy.css') }}">


<div class="container ">
    <form class="formPridaniaDoDatabazy formPridanieChaty " method="POST" action="/chatyEditacia">
        @csrf
        <input type="hidden" name="id" value="{{$chata->id}}">
        <label class="nadpisTabulky">EDITOVANIE PRÍSPEVKU CHATY</label>
        <div class="row">
            <div class="col-12 col-md-6">
                <!-- Prvý stĺpec -->
                <div class="form-group">
                    <label for="nazov_chaty>">Názov chaty:</label>
                    <label for="nazov"></label><input type="text" class="form-control" id="nazov" name="nazov" placeholder='Názov chaty' value="{{$chata->nazov}}">
                </div>
                <div class="form-group">
                    <label for="obrazok">Obrázok:</label>
                    <label for="obrazok"></label><input type="text" class="form-control" id="obrazok" name="obrazok" placeholder='URL obrázka' value="{{$chata->obrazok}}">
                </div>

                <div class="form-group">
                    <label for="obrazok">URL_Obrazka:</label>
                    <label for="obrazok"></label><label for="url"></label><input type="text" class="form-control" id="url" name="url" placeholder='URL obrázka' value="{{$chata->url}}">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group ">
                    <label for="text">Text:</label>
                    <label for="textChaty"></label><input type="text" class="form-control textChaty" id="text" name="text" placeholder='zadajte text' value="{{$chata->text}}">
                </div>
            </div>
        </div>
        <button type="submit"  class="nav-item tlacitkoPridaniePrispevku">
            Editovať príspevok
        </button>
    </form>
</div>
@endsection
