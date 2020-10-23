@extends('layouts.app')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

@section('content')
<div class="container p-10">
  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Titolo</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
  @foreach ($posts as $post)
      <tr>
        <th scope="row">{{$post->id}}</th>
        <td>{{$post->title}}</td>
        <td><a href="{{ route('posts.edit',$post->id) }}">Edit</a></td>
        <td>
        <form action="{{route('posts.destroy',$post->id)}}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-primary">Cancella</button>
        </form>
        </td>
      </tr>
  @endforeach
    </tbody>
</table>

  <div class="mt-5 justify-content-center">
    {{ $posts->links() }}
  </div>

</div>
@endsection