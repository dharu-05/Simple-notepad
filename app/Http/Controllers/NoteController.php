<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
      $notes = Note::all();
      return view('notes.index', compact('notes')); 
    }
    public function create()
    {
      return view('notes.create');
    }
    public function store(Request $request)
    {
      $request->validate([
           'title' => 'required',
           'content' => 'required',
        ]);
      Note::create($request->all());

      return redirect()->route('notes.index')
                       ->with('success', 'Note created successfully.');
     }
    public function edit($id)
    {
        $note = Note::findOrFail($id);
        return view('notes.edit', compact('note'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $note = Note::findOrFail($id);
        $note->update($request->all());

        return redirect()->route('notes.index')
                         ->with('success', 'Note updated successfully.');
    }

    public function destroy($id)
    {
        Note::destroy($id);
        return redirect()->route('notes.index')
                         ->with('success', 'Note deleted successfully.');
    }
} 

