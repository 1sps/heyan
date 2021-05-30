@extends('layouts.app')

@section('content')

<div class="container-fluid bg-light o-overlaid p-0">
  <div class="o-overlay">
    <div class="container py-4">
      <h1 class="display-4 text-light">Contact Us</h1>
      <div class="row">
        <div class="col-md-6">
          <hr class="my-4 bg-light">
          <p class="mr-3">
            <span class="lead text-light">
              Stay in touch.
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

<div class="container-fluid p-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2 class="text-dark">
            <img src="{{ asset('img/logo_1.png') }}" width="25" height="25" alt="" class="mr-1">
            Heyan Food Industries Pvt Ltd
          </h2>
          <br />

          <p class="mb-3">
            <img src="{{ asset('img/location-1.png') }}" width="25" height="25" alt="" class="mr-1">
            <strong>
              Bhadrapur 8, Jhapa, Nepal
            </strong>
          </p>

          <p class="mb-3">
            <img src="{{ asset('img/phone-1.webp') }}" width="25" height="25" alt="" class="mr-1">
            <strong>
              +977 23 256272
            </strong>
          </p>

          <p class="mb-3">
            <img src="{{ asset('img/email-1.png') }}" width="25" height="25" alt="" class="mr-1">
            <strong>
              info@heyan.com.np
            </strong>
          </p>

          <div class="mt-5">
            <h3 class="mb-4">Social Media</h3>
            <img src="{{ asset('img/fb-1.png') }}" width="35" height="35" alt="" class="mr-3">
            <img src="{{ asset('img/twitter-1.png') }}" width="35" height="35" alt="" class="mr-1">
          </div>
        </div>

        <div class="col-md-6">
          <h2>Message</h2>
          <p class="text-secondary">
            Send us a message if you have any questions or comments. We will
            get back to you as soon as possible.
          </p>
          @livewire ('contact-message-create')
        </div>
      </div>
    </div>
</div>

<div class="container-fluid bg-light py-4 border-top">
  <div class="container">
    <h3>
      Careers
    </h3>
    <a href="">
      See all vacancy
    </a>
  </div>
</div>
@endsection
