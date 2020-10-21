@extends('layouts.app')

@section('content')
<form action="{{route('posts.store')}}" method="POST">
  @csrf
  @method('POST')
    <div class="container">       
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="title">Titolo</label>
      <input type="text" placeholder="Titolo" class="form-control"  name="title" value="{{old('titolo')}}">
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="body">Body</label>
      <textarea placeholder="Descrizione" class="form-control" name="body"  cols="30" rows="10">{{old('body')}}</textarea>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Create</button>
</form>
    </div>
@endsection