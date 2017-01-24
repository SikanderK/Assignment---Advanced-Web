@extends('layout')

@section('content')

<h1 class="">Display Cards</h1>
<a href="/"><h4>Back to Home</h4></a>
<div class="container">
    <ul class="list-group">
      @if (empty($cards))
        <label class="label-warning">No cards to display.</label>
      @else
        <label class="label-warning">Some cards to display</label>
      @endif

      @foreach ($cards as $card)
        <li class="list-group-item list-group-item-info">
          <a href="/cards/{{ $card->id }}">{{$card->title}}</a>
          <a href="/cards/{{ $card->id }}/delete" class="pull-right">delete</a>
        </li>
      @endforeach
    </ul>
</div>

<hr />

<div class="container">
  <h3>Add a New Card</h3>
  <form action="/cards" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <textarea name="title" class="form-control"></textarea>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Add Card</button>
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

<div class="container">
    <ul class="list-group">
      @unless (empty($cardsb))
        <label class="label-warning">Some other cards to display</label>
      @endunless

      @foreach ($cardsb as $key => $value)
        <li class="list-group-item list-group-item-success">
          {{$value}}
        </li>
      @endforeach
    </ul>
</div>
@endsection
