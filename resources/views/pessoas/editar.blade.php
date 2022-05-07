@extends('layouts.master')


@section('title', 'Cadastro')

@section('content')

<section class="container-cadastro">
    <div class="logo-canto">
      <img src="{{ asset('images/logo-igreja.png') }}" alt="logo">
    </div>
    <h2>Cadastro</h2>
    <form action="{{ route('pessoas.update',['pessoa' => $pessoa->id]) }}" method="POST">
    @csrf
        @method('PUT')
      <div class="form-row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" value="{{ $pessoa->nome }}">
          </div>
          <div class="form-group">
            <label>Endereço</label>
            <input type="text" class="form-control" name="Endereço" id="endereco" placeholder="Endereço" value="{{ $pessoa->endereco }}">
          </div>
          <div class="form-group">
            <label for="telefone">Telefone</label>
            <input class="form-control" type="text" id="telefone" name="telefone" placeholder="(xx) xxxxx-xxxx" value="{{ $pessoa->tell }}">
          </div>
          <div class="form-group ">
            <label for="inputEmail4">Redes sociais</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="informe seu insta ou facebook" value="{{ $pessoa->redes_sociais }}">
          </div>
          <div class="form-group ">
            <label for="inputEmail4">Membro de Alguma Igreja?</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Qual igreja você faz parte?" value="{{ $pessoa->membro_igreja }}">
          </div>
        </div>
        <div class="col-md-6">
          <label for="">Foto </label>
          <div class="box-imagens">
            <img id="img-usuario" src="{{asset('images/default-imagem.png')}}" alt="Imagem-demonstração" value="{{ $pessoa->imagem }}" />
          </div>
          <input type="file" name="imagem" id="edit_image" capture="user" onchange="readURL(this);">
        </div>
      </div>
      <div class="form-row mt-3">
        <div class="form-group col-md-6">
          <label for="inputPassword4">Data de Nascimento</label>
          <input type="string" class="form-control" id="data-niver" value="{{ $pessoa->niver }}">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Membro Desde de:</label>
          <input type="string" class="form-control" id="data-membro">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="Observações">Observações</label>
          <input type="text" class="form-control" id="Observacao" value="{{ $pessoa->observacoes }}">
        </div>
        <div class="form-group col-md-3">
          <label for="Observações">Casado(A) com:</label>
          <select class="form-control" id="exampleFormControlSelect1" value="{{ $pessoa->casado_com }}">
            <option>rafael</option>
            <option>maria</option>
            <option>pedro</option>
            <option>joão</option>
            <option>igor</option>
          </select>
        </div>
        <div class="form-group col-md-3">
          <label for="Observações">Aniversário Casamento</label>
          <input type="string" class="form-control" id="data-membro" value="{{ $pessoa->niver_casamento }}">
        </div>
      </div>

      <div class="form-group checkboxs">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck" value="{{ $pessoa->tipo }}">
          <label class="form-check-label" for="gridCheck">
          Membros
          </label>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck" value="{{ $pessoa->tipo }}">
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
