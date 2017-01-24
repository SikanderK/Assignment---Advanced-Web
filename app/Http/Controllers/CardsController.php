<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    public function index(){
      $cards = Card::all();
      $cardsb = ['cardb 1', 'cardb 2', 'cardb 3'];
      return view('cards.index',compact('cards'))->with('cardsb', $cardsb);
      return view('cards.index')->with('cards',$cards)->with(['cardsb' => $cardsb]);
    }

    public function create(Request $request){
      $this->validate($request, [
        'title'=>'required'
      ]);

      $card = new Card;
      $card->title = $request->title;
      $card->save();

      // $card->notes()->save(
      //   new Note(['body' => $request->bodys])
      // );

      // $card->notes()->create([
      //   'body' => $request->bodys
      // ]);

      // $card->notes()->create($request->all());

      return back();
    }

    public function show(Card $card){
      // $mycard = Card::find($card);
      // return $card;

      // $card = Card::with('notes.user')->find($card->id);
      // return $card;

      $card->load('notes.user');

      return view('cards.show',['card'=>$card]);
    }

    public function delete(Card $card){
      foreach ($card->notes as $note) {
        $note->delete();
      }

      $card->delete();

      return back();
    }
}
