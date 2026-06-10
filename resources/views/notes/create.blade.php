@extends('layouts.app')

@section('content')
    <h1>Criar Nota</h1>

    <form method="POST" action="{{ route('notes.store') }}">
        @csrf

        <label for="title">Título</label>
        <input id="title" type="text" name="title" value="{{ old('title') }}" required>
        @error('title')<div class="error">{{ $message }}</div>@enderror

        <label for="content">Conteúdo</label>
        <textarea id="content" name="content" rows="8" required>{{ old('content') }}</textarea>
        @error('content')<div class="error">{{ $message }}</div>@enderror

        <button type="submit">Salvar</button>
    </form>
@endsection
