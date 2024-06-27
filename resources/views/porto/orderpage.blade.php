@extends('layouts.template')

@section('content')

<div class="container-fluid menus py-5">
    <div class="container py-5">       
        <h1 class="mb-4">Order Now</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="row g-4">
            <div class="col-lg-12">
                <div class="row g-4">
                    {{-- Search Box --}}
                    <div class="col-xl-3">
                        <form method="GET" action="{{ route('orderpage') }}">
                            <div class="input-group w-100 mx-auto d-flex">
                                <input type="search" class="form-control p-3" name="search" placeholder="Keywords" aria-describedby="search-icon-1" value="{{ $searchKeywords }}">
                                <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                            </div>
                        </form>
                    </div>
                    <div class="col-6"></div>
                    {{-- Sort by highest and lowest price --}}
                    <div class="col-xl-3">
                        <div class="bg-light ps-3 py-3 rounded d-flex justify-content-between mb-4">
                            <label for="sorting">Default Sorting:</label>
                            <form id="sortingForm" action="{{ route('orderpage') }}" method="GET">
                                <select id="sorting" name="sorting" class="border-0 form-select-sm bg-light me-3" onchange="this.form.submit()">
                                    <option value="0">None</option>
                                    <option value="1">Price: Highest to Lowest</option>
                                    <option value="2">Price: Lowest to Highest</option>
                                </select>
                                <input type="hidden" name="categories" value="{{ request('categories') }}">
                                <input type="hidden" name="minPrice" value="{{ request('minPrice') }}">
                                <input type="hidden" name="maxPrice" value="{{ request('maxPrice') }}">
                            </form>
                        </div>
                    </div>
                    
                </div>
                <div class="row g-4">
                    <div class="col-lg-3">
                        <div class="row g-4">
                            {{-- Filter by category and price --}}
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <h4>Categories</h4>
                                    <form method="GET" action="{{ route('orderpage') }}">
                                        <ul class="list-unstyled menus-categorie">
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="category" id="allCategories" value="all" {{ request('category') == 'all' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="allCategories">
                                                        All
                                                    </label>
                                                </div>
                                            </li>
                                            @foreach ($categories as $category)
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="category" id="category{{ $loop->index }}" value="{{ $category->product_category }}" {{ request('category') == $category->product_category ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="category{{ $loop->index }}">
                                                        {{ $category->product_category }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <h4 class="mb-2">Price</h4>
                                                <input type="number" class="form-control mb-2" id="minPrice" name="minPrice" placeholder="Min Price" value="{{ request('minPrice') }}" min="0">
                                                <input type="number" class="form-control" id="maxPrice" name="maxPrice" placeholder="Max Price" value="{{ request('maxPrice') }}" min="0">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Filter</button>
                                        </div>
                                    </form>
                                </div>
                            </div>                            
                                                        
                            {{-- <div class="col-lg-12">
                                <h4 class="mb-3">Featured products</h4>
                                <!-- Featured Products Section -->
                                @foreach ($products->take(3) as $product)
                                <div class="d-flex align-items-center justify-content-start mb-3">
                                    <div class="rounded me-4" style="width: 100px; height: 100px;">
                                        <img src="{{ asset('images/menus/' . $product->product_image) }}" class="img-fluid rounded" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-2">{{ $product->product_name }}</h6>
                                        <div class="d-flex mb-2">
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <h5 class="fw-bold me-2">Rp. {{ number_format($product->product_price, 0, ',', '.') }}</h5>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div> --}}
                        </div>
                    </div>

                    {{-- Products --}}

                    <div class="col-lg-9">
                        <div class="row g-4 justify-content-center">
                            @foreach ($products as $product)
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative menus-item">
                                    <div class="menus-img">
                                        <img src="{{ asset('images/menus/' . $product->product_image) }}" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">{{ strtoupper($product->product_category) }}</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>{{ $product->product_name }}</h4>
                                        <p>{{ $product->product_description }}</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">Rp. {{ number_format($product->product_price, 0, ',', '.') }}</p>
                                            <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn border border-secondary rounded-pill px-3 text-primary">
                                                    <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection