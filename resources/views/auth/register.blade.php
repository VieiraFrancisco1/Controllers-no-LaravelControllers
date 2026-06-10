@extends('layouts.app')

@section('content')
    <h1>Cadastro</h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <label for="name">Nome</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
        @error('name')<div class="error">{{ $message }}</div>@enderror

        <label for="email">E-mail</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required>
        @error('email')<div class="error">{{ $message }}</div>@enderror

        <label for="password">Senha</label>
        <input id="password" type="password" name="password" required>
        @error('password')<div class="error">{{ $message }}</div>@enderror

        <label for="password_confirmation">Confirmar senha</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required>

        <button type="submit">Cadastrar</button>
        <p>Já possui conta? <a href="{{ route('login') }}">Entrar</a></p>
    </form>
@endsection
