@extends('layouts.master')


@section('title', 'Cadastro')

@section('content')
    <section class="container-cadastro">
        <div class="logo-canto">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/logo-igreja.png') }}" alt="logo">
            </a>
        </div>

        <h2>Cadastro</h2>
        <form action="{{ route('pessoas.update', $pessoa->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome"
                            value="{{ $pessoa->nome }}">
                    </div>
                    <div class="form-group">
                        <label>Endereço</label>
                        <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Endereço"
                            value="{{ $pessoa->endereco }}">
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input class="form-control" type="text" id="telefone" name="tell"
                            placeholder="(xx) xxxxx-xxxx" value="{{ $pessoa->tell }}">
                    </div>
                    <div class="form-group ">
                        <label for="inputEmail4">Redes sociais</label>
                        <input type="email" class="form-control" name="redes_sociais" id="inputEmail4"
                            placeholder="informe seu insta ou facebook" value="{{ $pessoa->redes_sociais }}">
                    </div>
                    <div class="form-group ">
                        <label for="inputEmail4">Membro de Alguma Igreja?</label>
                        <input type="email" class="form-control" name="membro_igreja" id="inputEmail4"
                            placeholder="Qual igreja você faz parte?" value="{{ $pessoa->membro_igreja }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="">Foto</label>
                    <div class="box-imagens">

                        <img id="img-usuario" src="/image/{{ $pessoa->imagem }}" alt="Imagem-demonstração"
                            value="{{ $pessoa->imagem }}" />
                    </div>
                    <input type="file" name="imagem" id="edit_image" capture="user" onchange="readURL(this);">
                </div>
            </div>
            <div class="form-row mt-3">
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Data de Nascimento</label>
                    <input type="string" class="form-control" name="niver" id="data-niver"
                        value="{{ $pessoa->niver }}">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Membro Desde de:</label>
                    <input type="string" name="data_membro" class="form-control" id="data-membro"
                        value="{{ $pessoa->data_membro }}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Observações">Observações</label>
                    <input type="text" name="observacoes" class="form-control" id="Observacao"
                        value="{{ $pessoa->observacoes }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="Observações">Casado(A) com:</label>
                    <select name="casado_id" class="form-control" id="casado_id">
                        <option selected>não é casado</option>
                        @foreach ($pessoa as $pessoa)
                            <option value="{{ $pessoa->id }}">
                                {{ $pessoa->id == $pessoa->id ? 'selected' : '' }}>{{ $pessoa->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="Observações">Aniversário Casamento</label>
                    <input type="string" class="form-control" name="niver_casamento" id="data-membro"
                        value="{{ $pessoa->niver_casamento }}">
                </div>
            </div>
            <div class="form-group checkboxs">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tipo" value="0"
                        {{ old('tipo') == '0' ? 'checked' : ($pessoa->tipo == 0 ? 'checked' : '') }}>
                    <label class="form-check-label" for="gridCheck">
                        Membros
                    </label>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tipo" value="1"
                            {{ old('tipo') == '1' ? 'checked' : ($pessoa->tipo == 1 ? 'checked' : '') }}>
                        <label class="form-check-label" for="gridCheck">
                            Visitante
                        </label>
                    </div>
                </div>
            </div>
            <div class="btns-formulario">
                <button type="submit" class="btn btn-cancelar">Cancelar</button>
                <button type="submit" class="btn btn-salvar">Salvar </button>
            </div>
        </form>
    </section>
@endsection

@section('js')
    {!! JsValidator::formRequest('App\Http\Requests\PessoaRequest') !!}
@endsection
