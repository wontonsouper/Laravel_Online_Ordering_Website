@extends('layouts.app')


@section('content')

<div class="container-fluid menus py-5">
    <div class="container py-5">
        <h1 class="mb-4">Tambah Data Product</h1>
        <div class="row g-4">
            <div class="col-lg-12">
                <div class="row g-4">
                    <div class="col-lg-9">
                        <div class="row g-4 justify-content-center">
                            <div class="col-md-12">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
