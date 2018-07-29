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
                      <div style="display: inline-flex">
                          <a href="{{ route('products.edit', $product->id)}}" class="btn btn-primary">Editar</a>
                          <form class="ml-2" action="{{ route('products.delete', $product->id )}}" method="post">
                              @csrf
                              <button type="submit" class="btn btn-danger">Eliminar</button>
                          </form>
                      </div>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
  </div>
@endsection
