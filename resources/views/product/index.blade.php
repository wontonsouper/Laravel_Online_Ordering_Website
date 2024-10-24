@extends('layouts.app')

<!-- Product Table Start -->
@section('content')
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <h1>Daftar Product</h1>
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
            {{-- button Add --}}
            <a href="{{ route('product.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Price</th>
                        <th scope="col">Image</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product as $pd)
                        <tr>
                            <td>{{ $pd->id }}</td>
                            <td>{{ $pd->product_name }}</td>
                            <td>{{ $pd->product_category }}</td>
                            <td>
                                <p class="fw-bold me-2">Rp. {{ number_format($pd->product_price, 0, ',', '.') }}</p>
                            </td>
                            {{-- <td><img src="{{ asset('images/menus/' . $pd->product_image) }}"></td> --}}
                            <td>{{ $pd->product_image }}</td>
                            <td>{{ $pd->product_description }}</td>
                            <td>
                                <a href="{{ route('product.edit', $pd->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('product.destroy', $pd->id) }}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
<!-- Product Table End -->

@endsection