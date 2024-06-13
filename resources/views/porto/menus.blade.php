@extends('layouts.template')

@section('content')
<!-- Carousel Start -->
<div class="container-fluid bg-dark p-0 mb-5">
    <div class="row g-0 flex-column-reverse flex-lg-row">
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
            <div class="owl-carousel header-carousel">
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="{{ asset('images/full menu/P01-Coffee0.jpg') }}" alt="" width="600px" height="850px">
                </div>
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="{{ asset('images/full menu/P02-Coffee1.jpg') }}" alt="" width="600px" height="850px">
                </div>
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="{{ asset('images/full menu/P03-Breakfast.jpg') }}" alt="" width="600px" height="850px">
                </div>
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="{{ asset('images/full menu/P04-Breakfast.jpg') }}" alt="" width="600px" height="850px">
                </div>
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="{{ asset('images/full menu/P05 MAIN DISH.jpg') }}" alt="" width="600px" height="850px">
                </div>
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="{{ asset('images/full menu/P06 MAIN DISH.jpg') }}" alt="" width="600px" height="850px">
                </div>
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="{{ asset('images/full menu/P07 MAIN DISH.jpg') }}" alt="" width="600px" height="850px">
                </div>
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="{{ asset('images/full menu/P08 SNACK.jpg') }}" alt="" width="600px" height="850px">
                </div>
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="{{ asset('images/full menu/P09 SNACK.jpg') }}" alt="" width="600px" height="850px">
                </div>
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="{{ asset('images/full menu/P10 BEVERAGES.jpg') }}" alt="" width="600px" height="850px">
                </div>
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="{{ asset('images/full menu/P11 BEVERAGES.jpg') }}" alt="" width="600px" height="850px">
                </div>
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="{{ asset('images/full menu/P12.jpg') }}" alt="" width="600px" height="850px">
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<!-- Carousel End -->

@endsection