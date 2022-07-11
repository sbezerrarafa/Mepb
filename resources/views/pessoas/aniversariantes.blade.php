@extends('layouts.master')

@section('title', 'Membros')

@section('content')
    <section class="tabela-membros">
        <div class="topo-tabelas">
            <h3 class="title-anivesariantes">Aniversariantes do Mês</h3>
            <button class="btn btn-voltar"><a href="{{ route('home') }}">voltar</a></button>
        </div>
        <div class="card">
            <div class="table-responsive-sm">
                <table id="tabela-geral" class="table">
                    <thead>
                        <tr>
                            <th scope="col">Foto</th>
                            <th scope="col">Nome</th>
                            <th scope="col" width="15%">Faixa</th>
                            <th scope="col">Aniversário</th>
                            <th scope="col">Casamento</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                      
                        @foreach ($aniversariantes as $aniversariante)
                            <tr>
                                <td width="1%">
                                    @if ($aniversariante->imagem == null)
                                        <img class="img-fluid z-depth-1" src="{{ asset('images/ovelhinha.jpg') }}"
                                            alt="não tem imagem">
                                    @else
                                        <img class="img-fluid z-depth-1"
                                            src="{{ asset('storage/pessoas/' . $aniversariante->imagem) }}" />
                                    @endif
                                </td>
                                <td>{{ $aniversariante->nome }}</td>
                                @if($aniversariante->niverFaixa >= 15)
                                    <td class="adulto"><p>Adulto</p></td>
                                    @else
                                    <td class="crianca"><p>Criança</p></td>
                                @endif
                                <td>{{ $aniversariante->niver }}</td>
                                <td>{{ $aniversariante->niver_casamento }}</td>


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
