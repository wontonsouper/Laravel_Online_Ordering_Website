@extends('layouts.template')

@section('content')

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
    <div class="container">
        <h1 class="display-5 text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Our Clients Say!</h1>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            @foreach($reviews as $review)
                <div class="testimonial-item text-center">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>{{ $review->review_text }}</p>
                        <h5 class="mb-1">{{ $review->review_name }}</h5>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

    <!-- Testimonial End -->

 <!-- Review Create Start -->
 <section class="page-section portfolio" id="tambah-review">
    <div class="container">
        <h1>Tambah Review</h1>
        <form action="{{ route('review.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="review_name" class="form-label">Name</label>
                <input type="text" class="form-control" id="review_name" name="review_name" required>
            </div>
            <div class="mb-3">
                <label for="review_text" class="form-label">Text</label>
                <textarea class="form-control" id="review_text" name="review_text" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</section>
<!-- Review Create End -->

@endsection