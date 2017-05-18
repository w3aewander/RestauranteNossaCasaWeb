@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <div class="panel-title">Nova Comanda</div>
                   <div class="btn-group">
                         <a class="btn btn-link" href="{{route('listar.comandas')}}">Listar</a>
                   </div>              
                </div>

                <div class="panel-body">
                 
                  Editar comanda  {{$id}} ...
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection