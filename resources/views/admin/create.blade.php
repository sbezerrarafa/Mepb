@extends('layouts.app')

@section('content')
    <section class="container-login">
        <div class="logo">
            <img src="{{ asset('images/logo-igreja.png') }}" alt="logo">
        </div>        
            <form class="form-login" method="POST" action="{{ route('usuarios.store') }}">
                @csrf
                <label for="name">Nome</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                <label for="email">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                <label for="password">Senha</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                <label for="password-confirm">Confirme a Senha</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    <div>
                        <button type="submit" class="btn btn-enviar mb-2">Cadastrar</button>
                    </div>
            </form> 
    </section>

@endsection