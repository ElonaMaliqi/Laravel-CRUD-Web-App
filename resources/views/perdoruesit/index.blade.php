@extends('perdoruesit.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Uebaplikacioni per Menaxhimin e Telekomit te Kosoves (UMTK)</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/perdoruesi/create') }}" class="btn btn-success btn-sm" title="Shto Perdorues te Ri">
                            <i class="fa fa-plus" aria-hidden="true"></i> Shto
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Perdoruesi_umtk</th>
                                        <th>Oferta_umtk</th>
                                        <th>NumriTelefonit_umtk</th>
                                        <th>Veprimet</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($perdoruesit as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->perdoruesi_umtk }}</td>
                                        <td>{{ $item->oferta_umtk }}</td>
                                        <td>{{ $item->numriTelefonit_umtk }}</td>
                                        <td>
                                            
                                            <a href="{{ url('/perdoruesi/' . $item->id . '/edit') }}" title="Modifiko Perdoruesin"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifiko</button></a>
                                            <form method="POST" action="{{ url('/perdoruesi' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Fshij Perdoruesin" onclick="return confirm(&quot;Konfirmoni fshirjen?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Fshij</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection