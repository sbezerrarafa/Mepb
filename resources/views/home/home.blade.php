@extends('layouts.master')


@section('title', 'Dashboard')

@section('content')
<section class="container-menu">
    <div>
      <button class="btn-cadastrar"><a href="cadastro.html">Adicionar Pessoa +</a> </button>
    </div>
    <section class="menu">
      <div class="card  visitantes-semana">
        <h3>Visitantes da Última Semana</h3>
        <p>3</p>
        <button class="btn btn-card">Ver Todos</button>
      </div>
      <div class="card visitantes-total">
        <h3>Total de Vistantes Cadastrados</h3>
        <p>58</p>
        <button class="btn btn-card">Ver Todos</button>
      </div>
      <div class="card total-membros ">
        <h3>Total de Membros Cadastrados</h3>
        <p>302</p>
        <button class="btn btn-card"><a href="membros.html">Ver Todos</a></button>
      </div>
      <div class="card aniversariantes-mes">
        <h3>Aniversáriantes do Mês</h3>
        <p>5</p>
        <button class="btn btn-card">Ver Todos</button>
      </div>
    </section>
  </section>
  @endsection
  