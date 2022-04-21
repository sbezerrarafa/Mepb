@extends('layouts.master')


@section('title', 'Membros')

@section('content')
<section class="tabela-membros">
    <div class="topo-tabelas">
      <h3>Membros</h3>
      <button class="btn btn-voltar"><a href="home.html">voltar</a></button>
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

            <tr>
              <td width="1%">
                <img class="img-fluid z-depth-1 " src="/img/rafa.jpg" />
              </td>
              <td>Rafael Bezerra</td>
              <td>16/09/1993</td>
              <td>16/09/2019</td>

              <td>
                <button class="btn-editar"><i class="fas fa-edit"></i></button>
                <button class="btn-exluir"><i class="fas fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <td width="1%">
                <img class="img-fluid z-depth-1 " src="/img/rafa.jpg" />
              </td>
              <td>Rafael Bezerra</td>
              <td>16/09/1993</td>
              <td>16/09/2019</td>

              <td>
                <button class="btn-editar"><i class="fas fa-edit"></i></button>
                <button class="btn-exluir"><i class="fas fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <td width="1%">
                <img class="img-fluid z-depth-1 " src="/img/rafa.jpg" />
              </td>
              <td>Rafael Bezerra</td>
              <td>16/09/1993</td>
              <td>16/09/2019</td>

              <td>
                <button class="btn-editar"><i class="fas fa-edit"></i></button>
                <button class="btn-exluir"><i class="fas fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <td width="1%">
                <img class="img-fluid z-depth-1 " src="/img/rafa.jpg" />
              </td>
              <td>Rafael Bezerra</td>
              <td>16/09/1993</td>
              <td>16/09/2019</td>

              <td>
                <button class="btn-editar"><i class="fas fa-edit"></i></button>
                <button class="btn-exluir"><i class="fas fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <td width="1%">
                <img class="img-fluid z-depth-1 " src="/img/rafa.jpg" />
              </td>
              <td>Rafael Bezerra</td>
              <td>16/09/1993</td>
              <td>16/09/2019</td>

              <td>
                <button class="btn-editar"><i class="fas fa-edit"></i></button>
                <button class="btn-exluir"><i class="fas fa-trash-alt"></i></button>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </section>

  @endsection

