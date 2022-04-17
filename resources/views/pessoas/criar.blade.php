@extends('layouts.master')


@section('title', 'Cadastro')

@section('content')

<section class="container-cadastro">
    <div class="logo-canto">
      <img src="{{ asset('images/logo-igreja.png') }}" alt="logo">
    </div>
    <h2>Cadastro</h2>
    <form action="{{ route('pessoas.store') }}" method="POST">
      @csrf
      <div class="form-row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="name" id="nome" placeholder="Nome">
          </div>
          <div class="form-group">
            <label>Endereço</label>
            <input type="text" name="endereco" class="form-control" name="Endereço" id="endereco" placeholder="Endereço">
          </div>
          <div class="form-group">
            <label for="telefone">Telefone</label>
            <input name="tell" class="form-control" type="text" id="telefone" placeholder="(xx) xxxxx-xxxx">
          </div>
          <div class="form-group ">
            <label for="inputEmail4">Redes sociais</label>
            <input name="redes_sociais" type="name" class="form-control" id="inputEmail4" placeholder="informe seu insta ou facebook">
          </div>
          <div class="form-group ">
            <label for="inputEmail4">Membro de Alguma Igreja?</label>
            <input name="membro_igreja" type="name" class="form-control" id="inputEmail4" placeholder="Qual igreja você faz parte?">
          </div>
        </div>
        <div class="col-md-6">
          <label for="">Foto </label>
          <div class="box-imagens">
            <img id="img-usuario" src="{{asset('images/default-imagem.png')}}" alt="Imagem-demonstração" />
          </div>
          <input type="file" name="imagem" id="edit_image" capture="user" onchange="readURL(this);">
        </div>
      </div>
      <div class="form-row mt-3">
        <div class="form-group col-md-6">
          <label for="inputPassword4">Data de Nascimento</label>
          <input name="niver" type="date" class="form-control" id="data-membro">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Membro Desde de:</label>
          <input name="data_membro" type="date" class="form-control" id="data-membro">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="Observações">Observações</label>
          <input name="observacoes" type="text" class="form-control" id="Observacao">
        </div>
        <div class="form-group col-md-3">
          <label for="Observações">Casado(A) com:</label>
          <select name="casado_com" class="form-control" id="exampleFormControlSelect1">
            <option>rafael</option>
            <option>maria</option>
            <option>pedro</option>
            <option>joão</option>
            <option>igor</option>
          </select>
        </div>
        <div class="form-group col-md-3">
          <label for="Observações">Aniversário Casamento</label>
          <input name="niver_casamento" type="date" class="form-control" id="data-membro">
        </div>
      </div>
    <div class="d-flex " style="gap:15px;">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="tipo" id="flexRadioDefault1" checked>
          <label class="form-check-label" for="flexRadioDefault1">
          Membros
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="tipo" id="flexRadioDefault2" >
          <label class="form-check-label" for="flexRadioDefault2">
          Visitante
          </label>
        </div>
      </div>
      <div class="btns-formulario">
        <button type="submit" class="btn btn-cancelar">Cancelar</button>
        <button type="submit" class="btn btn-salvar">Salvar</button>
      </div>
    </form>
  </section>

  @endsection
  @section('js')
    {!! JsValidator::formRequest('App\Http\Requests\PessoaRequest') !!}
@endsection