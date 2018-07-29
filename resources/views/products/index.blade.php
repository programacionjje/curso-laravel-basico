@extends('layouts.app')

@section('content')
  <div class="container">
      @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="row">
        @foreach ($products as $product)
            <div class="col-lg-4 col-sm-12">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">
                          <a href="{{ route('products.show', $product->id )}}">{{ $product->title }}</a>
                      </h5>
                      <p class="card-text">
                          {{ $product->description }}
                      </p>
                      <p class="card-text">
                          <small class="text-muted">{{ $product->price }}</small>
                      </p>
                      <a href="#" class="btn btn-primary">Editar</a>
                      <a href="#" class="btn btn-danger">Eliminar</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
  </div>
@endsection
