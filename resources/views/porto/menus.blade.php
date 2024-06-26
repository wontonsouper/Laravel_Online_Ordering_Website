@extends('layouts.template')

@section('content')

<div class="container-fluid p-0 mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-5 wow fadeIn" data-wow-delay="0.5s">
            <div id="menusCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach($images as $index => $image)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <img src="{{ Storage::url($image->image_path) }}" class="d-block w-100" alt="{{ $image->title }}">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>{{ $image->order }}</h5>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#menusCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#menusCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>

@endsection
