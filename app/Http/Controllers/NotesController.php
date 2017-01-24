<?php

namespace App\Http\Controllers;

use App\Card;
use App\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
  public function store(Request $request, Card $card){
    $this->validate($request, [
      'body'=>'required'
    ]);

    $note = new Note;
    $note->user_id = '1';
    $note->body = $request->body;
    $card->notes()->save($note);

    // $card->notes()->save(
    //   new Note(['body' => $request->bodys])
    // );

    // $card->notes()->create([
    //   'body' => $request->bodys
    // ]);

    // $card->notes()->create($request->all());

    return back();
  }

  public function edit(Note $note)
  {
    return view('notes.update', compact('note'));
  }

  public function update(Request $request, Note $note){
    // $note->body = $request->body;
    // $note->save();
    $note->update($request->all());
    return redirect('/cards/'.$note->card()->first()->id);
  }
}
