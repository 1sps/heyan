@extends('layouts.app')

@section('content')

<div class="container-fluid bg-light o-overlaid p-0">
  <div class="o-overlay">
    <div class="container py-4">
      <h1 class="display-4 text-light">Products</h1>
      <div class="row">
        <div class="col-md-6">
          <hr class="my-4 bg-light">
          <p class="mr-3">
            <span class="lead text-light">
              Our Products
            </span>
          </p>
        </div>
        <div class="col-md-6">
          @if (false)
          <img src="{{ asset('img/hero-1.jpg') }}" alt="Card image foo" class="img-fluid">
          @endif
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="container py-3">
    @if ($products != null && count($products) > 0)
        <div class="row">
        @foreach ($products as $product)
          <div class="col-md-4">
            <div class="card mb-3">
              <img class="card-img-top" src="{{ asset('storage/' . $product->image_path) }}" alt="Product Image">
              <div class="card-body">
                <h3 class="card-title">
                {{ $product->name }}
                </h3>
                <p class="card-text">
                  {{ $product->description }}
                </p>
                @if (false)
                <a href="#" class="btn btn-primary">Go somewhere</a>
                @endif
              </div>
            </div>
          </div>
        @endforeach
      </div>
    @else
      <span class="text-danger">
        No facility to show
      </span>
    @endif
  </div>
</div>

@endsection
