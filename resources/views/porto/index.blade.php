@extends('layouts.template')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid bg-dark p-0 mb-5">
        <div class="row g-0 flex-column-reverse flex-lg-row">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="owl-carousel header-carousel">
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="{{ asset('images/menus/Porto_s Big Breakfast.jpeg') }}" alt="">
                    </div>
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="{{ asset('images/menus/Creamy Ginger Linguine.JPG') }}" alt="">
                    </div>
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="{{ asset('images/menus/Nachos.jpg') }}" alt="">
                    </div>
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="{{ asset('images/menus/khewnyuk.jpg') }}" alt="">
                    </div>
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="{{ asset('images/menus/Kue Lobak.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    
    <!-- About Us Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h4>
                <h1 class="display-4">Serving Since 2012</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Our Story</h1>
                    <p>Porto’s Bakery, Coffee & Kitchen adalah sebuah restoran yang menjual roti, kopi, dan makanan lainnya. Lokasinya di Muara Karang, Jakarta Utara. Restoran ini terletak di seberang Pasar Muara Karang.</p>
                </div>
                <div class="col-lg-4 py-5 py-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" style="object-fit: cover;" src="{{ asset('images/about.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Come To Porto's!</h1>
                    <p>Menu-menu yang disajikan dapat dinikmati segala usia dan suasana restoran sangat cocok untuk keluarga maupun untuk bekerja.</p>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i> Free WI-FI</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i> Charging Port</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i> Air Conditioner</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us End -->
    

    <!-- Best Sellers Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <p><span class="text-primary me-2"></span>Our Best Sellers</p>
                    <h1 class="display-5 mb-0">Check out our <span class="text-primary">Best Selling</span> menus &nbsp;&nbsp;&nbsp;&nbsp;
                    </h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-4">
                        <div class="col-12">
                            <a class="menu-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{ asset('images/menus/Creamy Ginger Linguine.JPG') }}" alt="">
                                    <div class="menu-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Pasta</p>
                                        <h5 class="text-white mb-0">Creamy Ginger Linguine</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="menu-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{ asset('images/menus/Ropang.jpg') }}" alt="">
                                    <div class="menu-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Toast</p>
                                        <h5 class="text-white mb-0">RoPang</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="menu-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{ asset('images/menus/oreo matcha latte.JPG') }}" alt="">
                                    <div class="menu-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Coffee</p>
                                        <h5 class="text-white mb-0">Oreo Matcha Latte</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row g-4">
                        <div class="col-12">
                            <a class="menu-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{ asset('images/menus/Salted Eggyolk .jpg') }}" alt="">
                                    <div class="menu-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Rice Bowl</p>
                                        <h5 class="text-white mb-0">Salted Eggyolk</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="menu-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{ asset('images/menus/PorkThaiBasil.jpg') }}" alt="">
                                    <div class="menu-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Rice Bowl</p>
                                        <h5 class="text-white mb-0">Pork Thai Basil</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="menu-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{ asset('images/menus/coffee latte.jpg') }}" alt="">
                                    <div class="menu-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Coffee</p>
                                        <h5 class="text-white mb-0">Coffee Latte</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-4">
                        <div class="col-12">
                            <a class="menu-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{ asset('images/menus/Sambal Matah Bowl.jpg') }}" alt="">
                                    <div class="menu-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Rice Bowl</p>
                                        <h5 class="text-white mb-0">Sambal Matah Bowl</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="menu-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{ asset('images/menus/nasgor kampung.jpg') }}" alt="">
                                    <div class="menu-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Fried Rice</p>
                                        <h5 class="text-white mb-0">Nasi Goreng Kampung</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="menu-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{ asset('images/menus/Chunky Avocado Coffee Float.jpeg') }}" alt="">
                                    <div class="menu-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Coffee</p>
                                        <h5 class="text-white mb-0">Chunky Avocado Coffee Float</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Best Sellers End -->


    <!-- Visiting Hours Start -->
    <div class="container-xxl bg-primary visiting-hours my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-6 text-white mb-5">Visiting Hours</h1>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <span>Everyday</span>
                            <span>7:00AM - 20:00PM</span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 text-light wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-6 text-white mb-5">Contact Info</h1>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Address</td>
                                <td>Jl.Muara Karang Blok Z1 Timur No.8 (Pasar Muara Karang) 14450</td>
                            </tr>
                            <tr>
                                <td>Phone Number</td>
                                <td>+62 21 6614845<br>+62 895 3598 62781</td>
                            </tr>
                            <tr>
                                <td>Social Media</td>
                                <td>
                                    <p class="mb-2">@portosbnd</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Visiting Hours End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <h1 class="display-5 text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Our Clients Say!</h1>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Test</p>
                        <h5 class="mb-1">Name</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    
@endsection
