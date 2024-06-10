<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Porto's Cafe</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Quicksand:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small> Jl.Muara Karang Blok Z1 Timur No.8 (Pasar Muara Karang) 14450</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Fri : 07.00 AM - 20.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+62 21 6614845</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand p-0">
        <img class="img-fluid me-3" src="{{ asset('images/icon/Portos_Logo_Ring') }}" alt="Logo">
            <h1 class="m-0 text-primary">Porto's Cafe</h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
                <a href="index.html" class="nav-item nav-link ">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="contact.html" class="nav-item nav-link">Contact Us</a>
            </div>
            <a href="" class="btn btn-primary">Order Now<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
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


    <!-- Best Sellers Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <p><span class="text-primary me-2">#</span>Our Best Sellers</p>
                    <h1 class="display-5 mb-0">Check out our <span class="text-primary">Best Selling</span> menus &nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="btn btn-primary py-3 px-5" href="">Order Here</a>
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


    <!-- Footer Start -->
    <div class="container-fluid footer bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Address</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl.Muara Karang Blok Z1 Timur No.8 (Pasar Muara Karang) 14450</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 21 6614845<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    +62 895 3598 62781</p>
                    <p class="mb-2"><i class="fab fa-instagram"></i>&nbsp;&nbsp; @portosbnd</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>