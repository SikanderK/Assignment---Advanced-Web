@extends('layout')

@section('content')

<h1 class="">Display Books</h1>
<a href="/"><h4>Back to Home</h4></a>
<div class="container">
    <ul class="list-group">
      @if (empty($books))
        <label class="label-warning">No Books to display.</label>
      @else
        <label class="label-warning">Some Books to display</label>
      @endif
    <table style="background-color:#e9ffe6" border="1px" width="65%">
        <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Year</th>
          <th>Pages</th>
            </tr>
      @foreach ($books as $book)
          <tr>
         <td style="padding-bottom: 1em; "><a href="/books/{{ $book->id }}">{{$book->title}}</a></td>
            <td style="padding-bottom: 1em; ">{{$book->author}}</td>
            <td style="padding-bottom: 1em; ">{{$book->year}}</td>
            <td style="padding-bottom: 1em; ">{{$book->pages}}</td>
          <td style="padding-bottom: 1em; "><a href="/books/{{ $book->id }}/delete" class="pull-right">delete</a></td>
          </tr>
      @endforeach

    </table>
    </ul>
</div>

<hr />

<div class="container">
  <h3>Add a New Book</h3>
  <form action="/books" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <h4>Book Title :</h4>
      <textarea name="title" class="form-control"></textarea>
    </div>
      <div class="form-group">
          <h4>Author : </h4>
          <textarea name="author" class="form-control"></textarea>
      </div>
      <div class="form-group">
          <h4>Year : </h4>
          <textarea name="year" class="form-control"></textarea>
      </div>
      <div class="form-group">
          <h4>Pages : </h4>
          <textarea name="pages" class="form-control"></textarea>
      </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Add Book</button>
    </div>
  </form>

  @if (count($errors))
    <ul>
      @foreach ($errors->all() as $error)
        <li style="color:red">
          {{ $error }}
        </li>
      @endforeach
    </ul>
  @endif

</div>

<hr />

{{--<div class="container">--}}
    {{--<ul class="list-group">--}}
      {{--@unless (empty($cardsb))--}}
        {{--<label class="label-warning">Some other books to display</label>--}}
      {{--@endunless--}}

      {{--@foreach ($cardsb as $key => $value)--}}
        {{--<li class="list-group-item list-group-item-success">--}}
          {{--{{$value}}--}}
        {{--</li>--}}
      {{--@endforeach--}}
    {{--</ul>--}}
{{--</div>--}}
@endsection
