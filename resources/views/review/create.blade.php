@extends('layouts.template')

@section('content')

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