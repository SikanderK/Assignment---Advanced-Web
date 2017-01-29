<?php

namespace App\Http\Controllers;

use App\Book;
use App\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
  public function store(Request $request, Book $book){
    $this->validate($request, [
      'body'=>'required'
    ]);

    $note = new Note;
    $note->user_id = '1';
    $note->body = $request->body;
    $book->notes()->save($note);



    return back();
    }

    public function edit(Note $note)
    {
      return view('notes.update', compact('note'));
    }

    public function update(Request $request, Note $note){

      $note->update($request->all());
      return redirect('/books/'.$note->book()->first()->id);
    }
  }
