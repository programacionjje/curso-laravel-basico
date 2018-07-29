@extends('layouts.app')

@section('content')
  <div class="container">
      @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <ul>
      @foreach ($products as $product)
        <li>{{ $product->title }}</li>
      @endforeach
    </ul>
  </div>
@endsection
