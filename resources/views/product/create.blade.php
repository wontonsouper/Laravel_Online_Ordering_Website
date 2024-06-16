@extends('layouts.app')

@section('content')

    <!-- Product Create Start -->
        <section class="page-section portfolio" id="tambah">
            <div class="container">
                <h1>Tambah Data Product</h1>
                <form action="{{ route('product.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="product_name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="product_name" name="product_name">
                    </div>
                    <div class="mb-3">
                        <label for="product_category" class="form-label">Category</label>
                        <input type="text" class="form-control" id="product_category" name="product_category">
                    </div>
                    <div class="mb-3">
                        <label for="product_price" class="form-label">Price</label>
                        <input type="number" class="form-control" id="product_price" name="product_price">
                    </div>
                    <div class="mb-3">
                        <label for="product_image" class="form-label">Image</label>
                        <input type="text" class="form-control" id="product_image" name="product_image">
                    </div>
                    <div class="mb-3">
                        <label for="product_description" class="form-label">Description</label>
                        <textarea class="form-control" id="product_description" name="product_description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </section>
    <!-- Product Create End -->

@endsection