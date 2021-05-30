@extends('layouts.app')

@section('content')
<div class="container-fluid bg-light o-overlaid p-0">
  <div class="o-overlay">
    <div class="container py-4 text-light">
      <h1 class="display-4">
      {{ $company->name }}
      </h1>
      <div class="row">
        <div class="col-md-6">
          <hr class="my-4 bg-light">
          <p class="mr-3">
            <span class="lead">
              {{ $company->slogan }}
            </span>
          </p>
          <a class="btn btn-danger btn-lg" href="{{ route('contact') }}" role="button">Contact Sales</a>
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

<div class="container-fluid border-top py-5 nb-fade-in">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-6 justify-content-center align-self-center display-4">
        <span class="text-primary">
          Tasty
        </span>
        <span class="text-danger">
          delicious
        </span>
        <span class="text-success">
          Crunchy
        </span>
        खानाको मजा लिनुहोस्
      </div>
      <div class="col-md-2">
      </div>
      <div class="col-md-4">
        <img src="{{ asset('img/twitter-1.png') }}" alt="Card image foo" class="img-fluid">
      </div>
    </div>
  </div>
</div>

<div class="container-fluid border-top py-5">
  <div class="container">
    <h3>
      Our Products
    </h3>
    <div class="row d-flex">
      @foreach ($products as $product)
        <div class="col-md-4">
          <div class="card mb-3">
            <img class="card-img-top" src="{{ asset('storage/' . $product->image_path) }}" alt="Product Image">
            <div class="card-body">
              <h3 class="card-title">
              {{ $product->name }}
              </h3>
              @if (false)
              <a href="#" class="btn btn-primary">Details</a>
              @endif
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>


<div class="container-fluid border-top py-5 bg-light">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-4">
        <img src="{{ asset('img/product-4.jpg') }}" alt="Card image foo" class="img-fluid">
      </div>
      <div class="col-md-6 justify-content-center align-self-center">
        Lorem ipsum solor emut dier dan taxidus ipsum connaxol.
        Lorem ipsum solor emut dier dan taxidus ipsum connaxol.
        Lorem ipsum solor emut dier dan taxidus ipsum connaxol.
        Lorem ipsum solor emut dier dan taxidus ipsum connaxol.
        Lorem ipsum solor emut dier dan taxidus ipsum connaxol.
        Lorem ipsum solor emut dier dan taxidus ipsum connaxol.
          <div class="mt-3">
          <button class="btn btn-lg btn-danger">
            See All Products
          </button>
        </div>
      </div>
      <div class="col-md-2">
      </div>
    </div>
  </div>
</div>

<div class="container-fluid border-top py-5 bg-light">
  <div class="container">
    <div class="form-group-inline">
      <h3>
        Subscribe to our Newsletter
      </h3>
      <input type="text" class="form-control mb-2" wire:model.defer="sender_name">
      @error('sender_name') <span class="text-danger">{{ $message }}</span> @enderror

      <button type="submit" class="btn btn-danger btn-lg" wire:click="store">Subscribe</button>
    </div>
  </div>
</div>

@endsection
