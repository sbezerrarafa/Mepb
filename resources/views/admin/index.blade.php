@extends('layouts.app')

@section('content')
<div class="topo"></div>
<section class="container-confirmacao-cadastro">
  <div class="title-confirmacao">
  <img src="{{ asset('images/confirmado.jpg') }}" alt="logo">
    <h3>Tudo Certo!</h3>
  </div>
  <div class="subtitle-confirmacao">
    <h4>Cadastro Realizado com Sucesso!</h4>
  </div>
  <a class="btn btn-cadastro-confirmacao" href="{{ route('home') }}">Ir para Home</a>
</section>