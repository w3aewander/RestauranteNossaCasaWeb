@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="panel-title">
                        <span class="badge">{{$id}}</span> <span class="text-center">Fechamento de Comanda</span>
                    </div>
                </div>
                {{Form::open(['url'=>route('registrar.comanda'),'class'=>'form-inline', 'role'=>'form'])}}
                <div class="panel-body">

                    {{Form::hidden('comanda_id',$id)}}
                    
                    <div class="control-group">
                        {{Form::label('valor','Valor: R$',['class'=>'label-form col-md-4'])}}
                        {{Form::number('valor', $valor,['class'=>'form-control col-md-8','readonly'=>'readonly'])}}
                    </div>
                    <div class="control-group">                       
                        {{Form::label('desconto','Desconto: %',['class'=>'col-md-4'])}}
                        {{Form::number('desconto',0,['class'=>'form-control col-md-8','onKeyUp'=>'calcularDesconto();calcularTotal();'])}}
                    </div>
                    <div class="control-group">                       
                        {{Form::label('valordesconto','Valor desconto: R$',['class'=>'col-md-4'])}}
                        {{Form::number('valordesconto',0,['class'=>'form-control col-md-8','readonly'=>'readonly'])}}
                    </div>
                    <div class="control-group">
                        {{Form::label('acrescimo','Acréscimo: %',['class'=>'col-md-4'])}}
                        {{Form::number('acrescimo', 0,['class'=>'form-control col-md-8', 'onKeyUp'=>'calcularAcrescimo();calcularTotal();'])}}
                    </div>
                    <div class="control-group">                       
                        {{Form::label('valoracrescimo','Valor acréscimo: R$',['class'=>'col-md-4'])}}
                        {{Form::number('valoracrescimo',0,['class'=>'form-control col-md-8','readonly'=>'readonly'])}}
                    </div>
                    <div class="control-group">
                        {{Form::label('total','Total: R$',['class'=>'label-form col-md-4'])}}
                        {{Form::number('total', $valor,['class'=>'form-control col-md-8','readonly'=>'readonly'])}}
                    </div>
                    <div class="control-group">
                        {{Form::label('recebido','Recebido: R$',['class'=>'col-md-4'])}}
                        {{Form::number('recebido', 0,['class'=>'form-control col-md-7','onKeyUp'=>'calcularTroco();' ]) }}
                    </div>
                    <div class="control-group">
                        {{Form::label('troco','Troco: R$',['class'=>'label-form col-md-4'])}}
                        {{Form::number('troco','0',['class'=>'form-control col-md-8','readonly'=>'readonly'])}}
                    </div>

                </div>
                <div class="panel-footer">
                    <div class="btn-group-sm text-center">
                        <a  class='btn btn-primary' href='{{route("listar.comandas")}}'>Listar</a>
                        {{Form::submit('Registrar',['class'=>'btn  btn-primary'])}}
                        {{Form::button('Limpar',['class'=>'btn btn-primary','onclick'=>'calcularTotal();'])}}
                    </div>
                </div>
                {{Form::close()}}
            </div>
        </div>
    </div>
</div>


<script>

    var init = function () {

        var valor = document.querySelector("#valor");
        var acrescimo = document.querySelector("#acrescimo");
        var valoracrescimo = document.querySelector("#valoracrescimo");
        var desconto = document.querySelector("#desconto");
        var valordesconto = document.querySelector("#valordesconto");
        var total = document.querySelector("#total");
        var recebido = document.querySelector("#recebido");
        var troco = document.querySelector("#troco");

    };

    var calcularTotal = function () {
        init();
        total.value = (valor.value + valoracrescimo.value - valordesconto.value).toFixed(2);
    };

    var calcularTroco = function () {
        init();
        troco.value = (recebido.value - total.value).toFixed(2);
    };

    var calcularDesconto = function () {
        init();
        valordesconto.value = (valor.value * desconto.value / 100).toFixed(2);

    };

    var calcularAcrescimo = function () {
        init();
        valoracrescimo.value = (valor.value * acrescimo.value / 100).toFixed(2);
    };


</script> 

@endsection 