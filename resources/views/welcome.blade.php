@extends('layouts.app')

@section('content')

<div class="comandas">

    <div class="row">
        <div class="col-md-10 col-md-offset-1">

             <div class="menu">
                  <div class="btn-group">
                      <a class="btn btn-success" href="{{route('nova.comanda')}}"><i class="fa fa-file-text"></i> Nova Comanda</a>
                      <a class="btn btn-danger" href="{{route('listar.comandas')}}"><i class="fa fa-list"></i> Listar Comandas</a>
                     
                  </div>
             </div>
        </div>
    </div>
</div>

@endsection