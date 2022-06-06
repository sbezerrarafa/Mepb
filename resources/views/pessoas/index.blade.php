@extends('layouts.master')

@section('title', 'Membros')

@section('content')
    <section class="tabela-membros">
        <div class="topo-tabelas">
            <h3>Membros</h3>
            <button class="btn btn-voltar"><a href="{{ route('home') }}">voltar</a></button>
        </div>
        <div class="card">
            <div class="table-responsive-sm">
                <table id="tabela-geral" class="table">
                    <thead>
                        <tr>
                            <th scope="col">Foto</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Aniversário</th>
                            <th scope="col">Membro</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pessoas as $pessoa)
                            <tr>
                                <td width="1%">
                                    @if ($pessoa["imagem"] == "http://127.0.0.1:8000/storage/pessoas")
                                    <img  class="img-fluid z-depth-1" src="{{ asset('images/ovelhinha.jpg') }}" alt="não tem imagem">
                                    @else 
                                    <img class="img-fluid z-depth-1" src="{{ $pessoa->imagem }}" />
                                    @endif   
                                </td>
                                <td>{{ $pessoa->nome }}</td>
                                <td>{{ $pessoa->niver }}</td>
                                <td>{{ $pessoa->data_membro }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('pessoas.edit', $pessoa->id) }}">
                                        <button class="btn-editar"><i class="fas fa-edit"></i></button>
                                    </a>
                                    <form action="{{ route('pessoas.destroy', ['pessoa' => $pessoa->id]) }}"
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
