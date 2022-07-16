@extends('layouts.master')

@section('title', 'Membros')

@section('content')

    <section class="tabela-membros">
        <div class="topo-tabelas">
            <h3 class="title-visitante">Visitantes</h3>
            <button class="btn btn-voltar"><a href="{{ route('home') }}">voltar</a></button>
        </div>
        <div class="card">
            <div class="table-responsive-sm">
                <table id="tabela-geral" class="table">
                    <thead>
                        <tr>
                            <th scope="col">Foto</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Igreja</th>
                            <th scope="col">Aniversário</th>
                            <th scope="col">Data da Visita</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($visitantes as $visitante)
                        
                        <?php 
                            $data_niver = strtotime($visitante->niver);
                            $data_convertida_niver = date("d/m/Y", $data_niver);

                            $data_criacao = strtotime($visitante->created_at);
                            $data_visita = date("d/m/Y",  $data_criacao);
                        
                        ?> 
                            <tr>
                                <td width="1%">
                                    @if ($visitante->imagem == null)
                                        <img class="img-fluid z-depth-1" src="{{ asset('images/ovelhinha.jpg') }}"
                                            alt="não tem imagem">
                                    @else
                                        <img class="img-fluid z-depth-1"
                                            src="{{ asset('storage/pessoas/' . $visitante->imagem) }}" />
                                    @endif
                                </td>
                                <td>{{ $visitante->nome }}</td>
                                    @if($visitante->membro_igreja != '')
                                        <td>{{ $visitante->membro_igreja }}</td>
                                    @else
                                        <td>Sem igreja</td>
                                    @endif
                                <td>{{ $data_convertida_niver }}</td>
                                <td>{{ $data_visita }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('pessoas.editar', $visitante->id) }}">
                                        <button class="btn-editar"><i class="fas fa-edit"></i></button>
                                    </a>
                                    <form action="{{ route('pessoas.delete', ['pessoa' => $visitante->id]) }}"
                                        method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn-exluir"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
