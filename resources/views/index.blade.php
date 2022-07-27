@extends('Frontend.layouts.main')
@section('main-content')


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5" id="home">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="{{asset('Frontend/img/carousel-1.jpg')}}" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 font-secondary text-white mt-n3 mb-md-4">Marriage is not about Age</h1>
                            <div class="d-inline-block border-top border-bottom border-light py-3 px-4">
                                <h3 class="text-uppercase font-weight-normal text-white m-0" style="letter-spacing: 2px;">It's about finding the right Person</h3>
                            </div>
                            <button type="button" class="btn-play mx-auto" data-toggle="modal"
                                data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="{{asset('Frontend/img/carousel-2.jpg')}}" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 font-secondary text-white mt-n3 mb-md-4">Marriage is not about Age</h1>
                            <div class="d-inline-block border-top border-bottom border-light py-3 px-4">
                                <h3 class="text-uppercase font-weight-normal text-white m-0" style="letter-spacing: 2px;">It's about finding the right Person</h3>
                            </div>
                            <button type="button" class="btn-play mx-auto" data-toggle="modal"
                                data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev justify-content-start" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary px-0" style="width: 68px; height: 68px;">
                    <span class="carousel-control-prev-icon mt-3"></span>
                </div>
            </a>
            <a class="carousel-control-next justify-content-end" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary px-0" style="width: 68px; height: 68px;">
                    <span class="carousel-control-next-icon mt-3"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

<!-- Friends & Family Start -->
    <div class="container-fluid py-5" id="GroomsBride">
        <div class="container pt-5 pb-3">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Presenting</h6>
                <h1 class="font-secondary display-4">Grooms & Bride</h1>
                <i class="far fa-heart text-dark"></i>
            </div>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-outline-primary font-weight-bold m-1 py-2 px-4" data-filter=".first">Grooms</li>
                        <li class="btn btn-outline-primary font-weight-bold m-1 py-2 px-4" data-filter=".second">Brides</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">
            @if($couple)
                @foreach($couple as $data)
                    @if($data->gender=='M')
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative mb-2">
                        @php
                            $photo=explode(',',$data->photo);
                        @endphp
                        <img class="img-fluid w-100" src="{{asset($photo[0])}}" alt="">
                        <div class="bg-secondary text-center p-4">
                            <h4 class="mb-3">{{$data->name}}</h4>
                            <p class="text-uppercase">{{$data->religion}} ||  {{$data->caste}}  || {{$data->manglik}}</p>
                            <p class="text-uppercase">{{$data->Feature}} ||  {{$data->complexion}} || {{$data->eating}} </p>
                            <p class="text-uppercase">{{$data->city}}  ||  {{$data->state}}</p>
                            <div class="d-inline-block">
                                <a class="mx-2" href="{{route('couple-detail',$data->id)}}"><i class="fas fa-eye"></i> View Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                    @else
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative mb-2">
                        @php
                            $photo=explode(',',$data->photo);
                        @endphp
                        <img class="img-fluid w-100" src="{{asset($photo[0])}}" alt="">
                        <div class="bg-secondary text-center p-4">
                            <h4 class="mb-3">{{$data->name}}</h4>
                            <p class="text-uppercase ">{{$data->religion}} || {{$data->caste}} || {{$data->manglik}}</p>
                            <p class="text-uppercase">{{$data->Feature}} ||  {{$data->complexion}} || {{$data->eating}} </p>
                            <p class="text-uppercase">{{$data->city}}  ||  {{$data->state}}</p>
                            <div class="d-inline-block">
                                <a class="mx-2" href="{{route('couple-detail',$data->id)}}"><i class="fas fa-eye"></i> View Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                    @endif
                @endforeach
                @endif
            </div>
        </div>
    </div>
    <!-- Friends & Family End -->


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>        
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">About</h6>
                <h1 class="font-secondary display-4">Groom & Bride</h1>
                <i class="far fa-heart text-dark"></i>
            </div>
            <div class="section-title position-relative text-center">
                <h1 class="font-secondary display-4">Some Successfull Stories</h1>
                <i class="far fa-heart text-dark"></i>
            </div>
            <div class="row m-0 mb-4 mb-md-0 pb-2 pb-md-0">
                <div class="col-md-6 p-0 text-center text-md-right">
                    <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-5">
                        <h3 class="mb-3">The Groom</h3>
                        <p>Lorem elitr magna stet rebum dolores sed. Est stet labore est lorem lorem at amet sea, eos tempor rebum, labore amet ipsum sea lorem, stet rebum eirmod amet. Kasd clita kasd stet amet est dolor elitr.</p>
                        <h3 class="font-secondary font-weight-normal text-muted mb-3"><i class="fa fa-male text-primary pr-3"></i>Jack</h3>
                        <div class="position-relative">
                            <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="{{asset('Frontend/img/about-1.jpg')}}" style="object-fit: cover;">
                </div>
            </div>
            <div class="row m-0">
                <div class="col-md-6 p-0" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="{{asset('Frontend/img/about-2.jpg')}}" style="object-fit: cover;">
                </div>
                <div class="col-md-6 p-0 text-center text-md-left">
                    <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-5">
                        <h3 class="mb-3">The Bride</h3>
                        <p>Lorem elitr magna stet rebum dolores sed. Est stet labore est lorem lorem at amet sea, eos tempor rebum, labore amet ipsum sea lorem, stet rebum eirmod amet. Kasd clita kasd stet amet est dolor elitr.</p>
                        <h3 class="font-secondary font-weight-normal text-muted mb-3"><i class="fa fa-female text-primary pr-3"></i>Rose</h3>
                        <div class="position-relative">
                            <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    


    <!-- Gallery Start -->
    <div class="container-fluid bg-gallery" id="gallery" style="padding: 120px 0; margin: 90px 0;">
        <div class="section-title position-relative text-center" style="margin-bottom: 120px;">
            <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Gallery</h6>
            <h1 class="font-secondary display-4 text-white">Our Photo Gallery</h1>
            <i class="far fa-heart text-white"></i>
        </div>
        <div class="owl-carousel gallery-carousel">
            @if($gallery)
                @foreach($gallery as $pics)
                        @php
                            $photos=explode(',',$pics->location);                            
                        @endphp
            <div class="gallery-item">
                <img class="img-fluid w-100" src="{{asset($photos[0])}}" alt="">
                <a href="{{asset($photos[0])}}" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
                @endforeach
            @endif
            
            
        </div>
    </div>
    <!-- Gallery End -->


   




    <!-- RSVP Start -->
    <div class="container-fluid py-5" id="contactUs">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Contact Us</h6>
                <h1 class="font-secondary display-4">Let Us Help You </h1>
                <i class="far fa-heart text-dark"></i>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-sm-6">
                                    <input type="text" class="form-control bg-secondary border-0 py-4 px-3" placeholder="Your Name"/>
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="email" class="form-control bg-secondary border-0 py-4 px-3" placeholder="Your Email"/>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-sm-6">
                                    <input type="email" class="form-control bg-secondary border-0 py-4 px-3" placeholder="Your Mobile"/>
                                </div>
                                <div class="form-group col-sm-6">
                                    <select class="form-control bg-secondary border-0" style="height: 52px;">
                                        <option value="0">Subject( My Query Is Related To)</option>
                                        <option value="Groom-Issue">Related to Groom</option>
                                        <option value="Bride-Issue">Related to Bride</option>
                                        <option value="Other-Issue">Some Other Issue</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control bg-secondary border-0 py-2 px-3" rows="5" placeholder="Message" required="required"></textarea>
                            </div>
                            <div>
                                <button class="btn btn-primary font-weight-bold py-3 px-5" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- RSVP End -->

<script>
    
    // Navbar on scrolling
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $('.navbar').fadeIn('slow').css('display', 'flex');
        } else {
            $('.navbar').fadeOut('slow').css('display', 'none');
        }
    });
</script>
@endsection
