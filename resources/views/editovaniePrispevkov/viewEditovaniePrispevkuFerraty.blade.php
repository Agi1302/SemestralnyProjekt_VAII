@extends('layouts.app')
@section('content')

 <link rel="stylesheet" href="{{ asset('css/stylUpravaDatabazy.css') }}">


 <div class="container">
     <form class="formPridaniaDoDatabazy formPridanieFerraty" method="POST" action="/ferratyEditacia">
         @csrf
         <input type="hidden" name="id" value="{{$ferrata->id}}">
         <label class="nadpisTabulky">PRIDANIE PRÍSPEVKU FERRATY</label>
         <div class="row">
             <div class="col-12 col-md-6">
                 <div class="form-group">
                     <label for="nazov_ferraty>">Názov ferraty:</label>
                     <input type="text" class="form-control" id="nazov" name="nazov" placeholder='Názov ferraty' value="{{$ferrata->nazov}}">
                 </div>
                 <div class="form-group">
                     <label for="obrazok">Obrázok:</label>
                     <label for="obrazok"></label><input type="text" class="form-control" id="obrazok" name="obrazok" placeholder='URL obrázka' value="{{$ferrata->obrazok}}">
                 </div>
             </div>
             <div class="col-12 col-md-6">
                 <div class="form-group ">
                     <label for="text">Text:</label>
                     <label for="textFerraty"></label><input type="text" class="form-control textFerraty" id="text" name="text" placeholder='zadajte text' value="{{$ferrata->text}}">
                 </div>
             </div>
         </div>
         <button type="submit"  class="nav-item tlacitkoPridaniePrispevku">
             Pridať príspevok
         </button>
     </form>
 </div>





















@endsection
