@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <div class="btn-group-sm">
                      <span class="glyphicon glyphicon-file"></span> Nova Comanda                      
                    </div>
                 </div>

                <div class="panel-body">                 
                  <div class="form">  
                    {{Form::open(['url'=>route('criar.comanda')])}}
                    <div class="form-group">
                      {{Form::label('numero','Número:',['class'=>'form-label'])}}
                      {{Form::text('numero','0',['class'=>'form-control', 'placeholder'=>'gerar automaticamente','readonly'=>'readonly'])}}
                    </div>
                    <div class="form-group">
                      {{Form::label('mesa','Mesa:',['class'=>'form-label'])}}
                      {{Form::text('mesa','0',['class'=>'form-control', 'placeholder'=>'Deixe em branco para gerar automaticamente...'])}}
                    </div>                    
                    <div class="form-group">
                      {{Form::submit('Criar',['class'=>'btn btn-primary btn-justified'])}}
                      {{Form::reset('Limpar',['class'=>'btn btn-danger btn-justified'])}}                        
                    </div>
                    {{Form::close()}}
                   </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection