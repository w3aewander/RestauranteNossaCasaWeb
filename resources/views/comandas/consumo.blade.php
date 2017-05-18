@extends('layouts.app')

@section('content')
<div class="container">
   <?php $valor = number_format(Restaurante\Comanda::find($comanda_id)->consumo()->join('produto','produto.id','consumo.produto_id')->select(DB::raw('sum(qtde*valor_unitario) as total'))->first()->total,2); ?>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <div class="panel panel-default">
                <div class="panel-heading">                 
                    <div class="panel-title">

                        <div class="btn-group-sm">
                            <a class="btn btn-primary" href="{!!route('listar.comandas')!!}">
                                <span class="glyphicon glyphicon-backward"></span> Voltar</a>
                            <a class="btn btn-primary" href="{!!route('listar.comandas')!!}">
                                <span class="glyphicon glyphicon-shopping-cart"></span> Novo ITem</a>

                                <a class="btn btn-primary" href="{!!route('fechar.comanda',['id'=>$comanda_id,'valor'=>$valor])!!}">
                                <span class="glyphicon glyphicon-stop"></span> Fechar</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">                 
                    <div class="panel-title">
                        <h3 class="text-info">Comanda: {{$comanda_id}}</h3>
                    </div>
                </div>            
                <div class="panel-body">
                    <table class='table table-bordered table-condensed table-responsive'>
                        <thead>
                            <tr>
                                <th style="text-align: center;">Item</th>
                                <th style="text-align: center;">Unidade</th>
                                <th style="text-align: center;">Qtde</th>
                                <th style="text-align: right;">V.Unitário</th>
                                <th style="text-align: right;">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @each('comandas.itens',$consumo, 'dado','comandas.vazia')
                        </tbody>

                        <tfoot>
                            <tr>
                                <th colspan="4" style="text-align: right;">Valor total:</th>
                                <th style="text-align: right;">R$ {{$valor}} </th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>  
@endsection

