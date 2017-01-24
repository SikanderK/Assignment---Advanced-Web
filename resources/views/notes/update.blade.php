@extends('layout')

@section('content')


<div class="row">
  <h1>Edit the Note</h1>
  <form action="/notes/{{$note->id}}" method="POST">
    {{ csrf_field() }}
    {{ method_field('patch') }}

    <div class="form-group">
      <textarea name="body" class="form-control">{{ $note->body }}</textarea>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Update Note</button>
    </div>
  </form>
</div>

@endsection
