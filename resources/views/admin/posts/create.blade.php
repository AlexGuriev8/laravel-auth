@extends('layouts.app')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@section('content')
<form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('POST')
    <div class="container">       
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="title">Titolo</label>
      <input type="text" placeholder="Titolo" class="form-control"  name="title" value="{{old('title')}}">
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="img">Immagine</label>
      <input accept="image/*" type="file" class="form-control"  name="img" value="{{old('title')}}">
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="body">Body</label>
      <textarea placeholder="Descrizione" class="form-control" name="body"  cols="30" rows="10">{{old('body')}}</textarea>
    </div>
  </div>
  <div class="form-row">
     <div class="col-md-6 mb-3">
        @foreach ($tags as $tag)
           <label for="tag">{{$tag->name}}</label> 
     <input type="checkbox" name="tags[]" value="{{$tag->id}}">
        @endforeach
     </div>
  </div>
  <button class="btn btn-primary" type="submit">Create</button>
</form>
    </div>
@endsection

