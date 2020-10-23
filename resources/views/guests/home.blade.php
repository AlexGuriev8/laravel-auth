@extends('layouts.app')

@section('content')
  
@guest
    <p class="lead text-center">Guest</p>
@else
    <p class="lead text-center">Il tuo nome è: {{ Auth::user()->name }}</p>
@endguest
  <div class="display-4  text-center">
        <img src="https://c.pxhere.com/images/7d/21/ed588c6f9dd84ff1cf8f96100885-1450843.jpg!d" alt="img">
  </div>
@endsection
