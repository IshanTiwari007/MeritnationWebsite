@extends('layouts.theme')

@section('main-content')


<!-- Carousel -->
<div id="Banner_slider" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
        @foreach($banners as $key=>$banner)
        <li data-target="#Banner_slider" data-slide-to="{{$key}}" class="{{( $key==0 ? 'active' : ' ')}}"></li>
        @endforeach
    </ol>

  <div class="carousel-inner">
  @foreach($banners as $key=>$banner)
    <div class="carousel-item {{( $key==0 ? 'active' : ' ')}}">
      <img src="{{$banner->photo}}" class="d-block w-100" style="height: 60vh; object-fit: cover;" alt="Slider image">
      <div class="carousel-caption d-none d-md-block" style="margin-bottom: 7%;">
        <h5>{{$banner->title}}</h5>
        <p>{{$banner->description}}</p>
      </div>
    </div>
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-target="#Banner_slider" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>

  <button class="carousel-control-next" type="button" data-target="#Banner_slider" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>

</div>

<!-- Emd of Carousel  -->

<!-- Search Bar -->

<div class="search_bar">
   <div class="search">
      <input type="text" class="searchTerm" placeholder="What are you looking for?">
      <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
   </div>
   <div class="search">
      <input type="text" class="searchTerm2" placeholder="Enter ID or Name">
      <button type="submit" class="searchButton2">
        <i class="fa fa-search"></i>&nbsp Find Groom
     </button>
     &nbsp &nbsp &nbsp
      <input type="text" class="searchTerm2" placeholder="Enter ID or Name">
      <button type="submit" class="searchButton3">
        <i class="fa fa-search"></i>&nbsp Find Bride
     </button>
   </div>
</div>

<!-- End of search bar  -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of carousel  -->


@endsection
