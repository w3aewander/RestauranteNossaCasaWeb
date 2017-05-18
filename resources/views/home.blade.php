@extends('layouts.app')

@php $x = 10; @endphp

@section('content')
@unless($x !== 10)
  @php
     $teste =  "Sem autorização de acesso.";
  @endphp 

  @component('alert')
   @slot('title')
      Forbidden!!!
   @endslot
  <strong>{{$teste}}</strong>
  @endcomponent
  
@endunless

@endsection