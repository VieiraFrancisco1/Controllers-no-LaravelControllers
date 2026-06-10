@extends('layouts.app')

@section('content')
    <h1>Login</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <label for="email">E-mail</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
        @error('email')<div class="error">{{ $message }}</div>@enderror

        <label for="password">Senha</label>
        <input id="password" type="password" name="password" required>
        @error('password')<div class="error">{{ $message }}</div>@enderror

        <label class="checkbox">
            <input type="checkbox" name="remember"> Lembrar-me
        </label>

        <button type="submit">Entrar</button>
        <p>Não possui conta? <a href="{{ route('register') }}">Cadastre-se</a></p>
    </form>
@endsection
