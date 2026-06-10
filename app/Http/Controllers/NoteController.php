<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Auth::user()->notes()->latest()->get();

        return view('notes.index', [
            'notes' => $notes,
        ]);
    }

    public function create()
    {
        return view('notes.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
        ]);

        Auth::user()->notes()->create([
            'title' => $data['title'],
            'content' => Crypt::encryptString($data['content']),
        ]);

        return redirect()->route('notes.index')->with('success', 'Nota criada com sucesso.');
    }

    public function edit(Note $note)
    {
        $this->authorize('view', $note);

        return view('notes.edit', [
            'note' => $note,
            'content' => Crypt::decryptString($note->content),
        ]);
    }

    public function update(Request $request, Note $note)
    {
        $this->authorize('update', $note);

        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
        ]);

        $note->update([
            'title' => $data['title'],
            'content' => Crypt::encryptString($data['content']),
        ]);

        return redirect()->route('notes.index')->with('success', 'Nota atualizada com sucesso.');
    }

    public function destroy(Note $note)
    {
        $this->authorize('delete', $note);

        $note->delete();

        return redirect()->route('notes.index')->with('success', 'Nota removida com sucesso.');
    }
}
