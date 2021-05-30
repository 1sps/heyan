<footer class="border-top">
  <div class="container-fluid bg-dark-rm text-white" style="background-color: #4a1c1a;">
    <div class="container py-4">
      <div class="row">
        <div class="col-md-4">
          <h3 class="h5 mb-3">
            <img src="{{ asset('img/logo_1.png') }}" width="25" height="25" alt="" class="mr-1">
            {{ $company->name }}
          </h3>
          <p class="mb-2">
            <img src="{{ asset('img/location-1.png') }}" width="25" height="25" alt="" class="mr-1">
            {{ $company->address }}
          </p>
          <p class="mb-2">
            <img src="{{ asset('img/phone-1.webp') }}" width="25" height="25" alt="" class="mr-1">
            {{ $company->phone }}
          </p>
          <p class="mb-2">
            <img src="{{ asset('img/phone-1.webp') }}" width="25" height="25" alt="" class="mr-1">
            {{ $company->email }}
          </p>
        </div>
        <div class="col-md-4">
          Products
          <br />
          Make Order
          <br />
          About us
        </div>
        <div class="col-md-4">
          <h3 class="h4">Connect</h3>
          <img src="{{ asset('img/fb-1.png') }}" width="30" height="30" alt="" class="mr-1">
          <img src="{{ asset('img/twitter-1.png') }}" width="30" height="30" alt="" class="mr-1">
          <p class="mt-3">
            Careers
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid border-top border-bottom bg-white">
    <div class="container text-center py-3">
      &copy; 2021 
      Heyan
      |
      Designed by OIT
    </div>
  </div>

</footer>
