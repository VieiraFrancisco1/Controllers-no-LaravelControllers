@extends('layouts.app')

@section('content')
    <h1>Editar Nota</h1>

    <form method="POST" action="{{ route('notes.update', $note) }}">
        @csrf
        @method('PUT')

        <label for="title">Título</label>
        <input id="title" type="text" name="title" value="{{ old('title', $note->title) }}" required>
        @error('title')<div class="error">{{ $message }}</div>@enderror

        <label for="content">Conteúdo</label>
        <textarea id="content" name="content" rows="8" required>{{ old('content', $content) }}</textarea>
        @error('content')<div class="error">{{ $message }}</div>@enderror

        <button type="submit">Atualizar</button>
    </form>
@endsection
