@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="panel-title">Comandas</div>
                </div>
                <div class="panel-body">

                    @foreach( $comandas as $comanda)    
                    <div class="panel panel-default" style="width:25%;float:left">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <div class="text-center"><Strong>Comanda {{$comanda->id}}</strong></div> 
                            </div>
                            <img src="{{asset('imagens/mesax.png')}}" class="img-responsive">
                            <div class="text-center">
                                <strong>
                                    Valor:
                                    <i class="fa fa-2x fa-dollar"></i>{!! number_format(Restaurante\Comanda::find($comanda->id)->consumo()->join('produto','produto.id','consumo.produto_id')->select(DB::raw('sum(qtde*valor_unitario) as total'))->first()->total,2) !!}                                    
                                </strong>
                            </div>

                        </div>
                        <div class="panel-body">
                            <div class="btn-group-xs btn-group-justified">
                                @component('layouts.component_btn_comanda',['comanda'=>$comanda])
                                @slot('editar')
                                Editar
                                @endslot
                                @slot('fechar')
                                Fechar
                                @endslot 
                                @endcomponent
                            </div> 
                        </div>
                        <div class="panel-footer"></div>
                    </div>
                    @endforeach   



                </div>
            </div>
        </div>
    </div>
</div>
@endsection