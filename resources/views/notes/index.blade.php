@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h1>Minhas Notas</h1>
        <a class="button" href="{{ route('notes.create') }}">Nova Nota</a>
    </div>

    @if($notes->isEmpty())
        <p>Você ainda não tem notas. Crie uma nota para começar.</p>
    @else
        <div class="notes-grid">
            @foreach($notes as $note)
                <article class="note-card">
                    <h2>{{ $note->title }}</h2>
                    <p>{{ Str::limit(Crypt::decryptString($note->content), 160) }}</p>
                    <div class="meta">
                        <span>Criado: {{ $note->created_at->format('d/m/Y H:i') }}</span>
                        <span>Atualizado: {{ $note->updated_at->format('d/m/Y H:i') }}</span>
                    </div>
                    <div class="actions">
                        <a href="{{ route('notes.edit', $note) }}">Editar</a>
                        <form method="POST" action="{{ route('notes.destroy', $note) }}" onsubmit="return confirm('Deseja excluir esta nota?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    </div>
                </article>
            @endforeach
        </div>
    @endif
@endsection
