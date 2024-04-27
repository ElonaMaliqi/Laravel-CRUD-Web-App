@extends('perdoruesit.layout')
@section('content')
<div class="card">
  <div class="card-header">Faqja e Modifikimit te Perdoruesve te Telekomit te Kosoves</div>
  <div class="card-body">
      
      <form action="{{ url('perdoruesi/' .$perdoruesit->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$perdoruesit->id}}" id="id" />
        <label>Perdoruesi_umtk</label></br>
        <input type="text" name="perdoruesi_umtk" id="perdoruesi_umtk" value="{{$perdoruesit->perdoruesi_umtk}}" class="form-control"></br>
        <label>Oferta_umtk</label></br>
        <input type="text" name="oferta_umtk" id="oferta_umtk" value="{{$perdoruesit->oferta_umtk}}" class="form-control"></br>
        <label>NumriTelefonit_umtk</label></br>
        <input type="text" name="numriTelefonit_umtk" id="numriTelefonit_umtk" value="{{$perdoruesit->numriTelefonit_umtk}}" class="form-control"></br>
        <input type="submit" value="Modifiko" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop