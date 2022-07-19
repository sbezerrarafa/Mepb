
@extends('layouts.app')
@section('title', 'Login')

@section('content')
<div class="logo">
    <img src="{{ asset('images/logo-igreja.png') }}" alt="logo">
  </div>
  <section class="container-login">
    <h3>Bem vindo!</h3>
    <p>Entre com sua Conta</p>
    <form class="form-login" method="POST" action="{{ route('login') }}">
        @csrf
      <div class="form-group">
        <input type="email" id="email" name="email" class="form-control input-logar @error('email') is-invalid @enderror" style="font-family: FontAwesome;" placeholder='&#xf007  Nome' value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        <div class="form-group">
          <input type="password" class="form-control input-logar  @error('password') is-invalid @enderror" id="password" style="font-family: FontAwesome;" placeholder=" &#xf023  Senha " name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">
                {{ __('lembrar-me') }}
            </label>
        </div>
        <button type="submit" class="btn btn-enviar mb-2">{{ __('Login') }}</button>

     @if (Route::has('password.request'))
      <a class="esqueceu-senha mt-2" href="{{ route('password.request') }}">
        {{ __('Esqueceu a Senha?') }}
       </a>
     @endif
    </form>
</section>
@endsection
