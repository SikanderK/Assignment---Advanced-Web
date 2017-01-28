<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
      $books = Book::all();
//      $cardsb = ['cardb 1', 'cardb 2', 'cardb 3'];
      return view('books.index',compact('books'));
//          ->with('cardsb', $cardsb);
      return view('books.index')->with('books',$books);
//          ->with(['cardsb' => $cardsb]);
    }

    public function create(Request $request){
      $this->validate($request, [
        'title'=>'required'
      ]);

      $book = new Book;
      $book->title = $request->title;
        $book->author = $request->author;
      $book->save();
        

      return back();
    }

    public function show(Book $book){


      $book->load('notes.user');

      return view('books.show',['book'=>$book]);
    }

    public function delete(Book $book){
        
      foreach ($book->notes as $note) {
        $note->delete();
      }

      $book->delete();

      return back();
    }
}
