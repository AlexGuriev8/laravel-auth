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
<form action="{{route('posts.update',$post->id)}}" method="POST">
  @csrf
  @method('PATCH')
    <div class="container">       
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="title">Titolo</label>
      <input type="text" placeholder="Titolo" class="form-control"  name="title" value="{{old('title')}}">
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
     <input type="checkbox" name="tags[]" value="{{$tag->id}}"{{($post->tags->contains($tag->id)) ? 'checked' : ''}}>
        @endforeach
     </div>
  </div>
  <button class="btn btn-primary" type="submit">EDIT</button>
</form>
    </div>
@endsection