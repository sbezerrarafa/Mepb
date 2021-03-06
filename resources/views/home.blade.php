@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
    <section class="container-menu">
        <div class="area-sair">
            <button class="btn-cadastrar"><a href="{{ route('pessoas.criar') }}">Adicionar Pessoa +</a> </button>
            <a class="sair" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Sair <i
                    class="far fa-sign-out"></i></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        <section class="menu">
            <div class="card  visitantes-semana">
                <h3>Visitantes da Última Semana</h3>
                <p>{{ $totalVisitantesSemana }}</p>
                <button class="btn btn-card">
                    <a href="{{ route('pessoas.visitante') }}">Ver Todos</a>
                </button>
            </div>
            <div class="card visitantes-total">
                <h3>Total de Vistantes Cadastrados</h3>
                <p>{{ $totalVisitantes }}</p>
                <button class="btn btn-card">
                    <a href="{{ route('pessoas.visitante') }}">Ver Todos</a>
                </button>
            </div>
            <div class="card total-membros ">
                <h3>Total de Membros Cadastrados</h3>
                <p>{{ $totalMembros }}</p>
                <button class="btn btn-card">
                    <a href="{{ route('pessoas.membro') }}">Ver Todos</a>
                </button>
            </div>
            <div class="card aniversariantes-mes">
                <h3>Aniversáriantes do Mês</h3>
                <p>{{ $aniversariantes }}</p>
                <button class="btn btn-card"> 
                    <a href="{{ route('pessoas.aniversariante') }}">Ver Todos</a>
                </button>
            </div>
        </section>
        <a class="adicionar-user" href="{{ route('usuarios.create') }}">Registrar</a>
    </section>
@endsection
