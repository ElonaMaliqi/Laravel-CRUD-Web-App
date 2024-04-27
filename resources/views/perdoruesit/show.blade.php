@extends('perdoruesit.layout')
@section('content')
<div class="card">
  <div class="card-header">Faqja Perdoruesit</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Perdoruesi_umtk : {{ $perdoruesit->perdoruesi_umtk }}</h5>
        <p class="card-text">Oferta_umtk : {{ $perdoruesit->oferta_umtk }}</p>
        <p class="card-text">NumriTelefonit_umtk : {{ $perdoruesit->numriTelefonit_umtk }}</p>
  </div>
      
    </hr>
  
  </div>
</div>