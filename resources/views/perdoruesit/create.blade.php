@extends('perdoruesit.layout')
@section('content')
<div class="card">
  <div class="card-header">Faqja e Shtimit te Perdoruesve te Telekomit te Kosoves</div>
  <div class="card-body">
      
      <form action="{{ url('perdoruesi') }}" method="post">
        {!! csrf_field() !!}
        <label>Perdoruesi_umtk</label></br>
        <input type="text" name="perdoruesi_umtk" id="perdoruesi_umtk" class="form-control"></br>
        <label>Oferta_umtk</label></br>
        <input type="text" name="oferta_umtk" id="oferta_umtk" class="form-control"></br>
        <label>NumriTelefonit_umtk</label></br>
        <input type="text" name="numriTelefonit_umtk" id="numriTelefonit_umtk" class="form-control"></br>
        <input type="submit" value="Ruaj" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop