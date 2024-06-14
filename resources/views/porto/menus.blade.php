<!-- Carousel Start -->
<div class="container-fluid bg-dark p-0 mb-5">
    <div class="row g-0 flex-column-reverse flex-lg-row">
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
            <div class="owl-carousel header-carousel">
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="{{ asset('images/full menu/P01-Coffee0.jpg') }}" alt="" width="200px" height=4850px">
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
<!-- Carousel End -->

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<!-- Bootstrap Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Libraries JS -->
<script src="{{ asset('lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('js/main.js') }}"></script>

<!-- Initialize Owl Carousel -->
<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            items: 1,
            loop: true,
            nav: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true
        });
        // Initialize WOW.js if using
        new WOW().init();
    });
</script>
</body>
</html>