@extends('layout')

@section('content')

<div class="row">
    <div class="col-md-6 col-md-offset-3">
      
      <h1> {{$card->title}} </h1>
      <ul class="list-group">
        @foreach ($card->notes as $note)
          <li class="list-group-item">
            <a href="/notes/{{ $note->id }}/edit">{{ $note->body }}</a>
            <a href="#" class="pull-right" data-toggle="tooltip" title="{{ $note->user->name }}, {{ $note->user->email}}">{{ $note->user->name }}</a>
          </li>
        @endforeach
      </ul>

      <hr />

      <h3>Add a New Note</h3>
      <form action="/cards/{{$card->id}}/notes" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
          <textarea name="body" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Add Note</button>
          <a href="/index" class="pull-right">Back</a>
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
</div>

@endsection
