@extends('layouts.app')

@section('content')
  <div class="container">
    <ul>
      @foreach ($products as $product)
        <li>{{ $product->title }}</li>
      @endforeach
    </ul>
  </div>
@endsection
