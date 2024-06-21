@extends('layouts.template')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Shopping Cart</h1>
    @if(session('cart'))
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Picture</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach(session('cart') as $id => $details)
                <tr>
                    <td><img src="{{ asset('images/menus/' . $details['image']) }}" width="50" height="50" class="img-fluid"></td>
                    <td>{{ $details['name'] }}</td>
                    <td>Rp. {{ number_format($details['price'], 0, ',', '.') }}</td>
                    <td>
                        <form action="{{ route('cart.update', $id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('PUT')
                            <input type="number" name="quantity" value="{{ $details['quantity'] }}" min="1" class="form-control d-inline-block w-auto">
                            <button type="submit" class="btn btn-info btn-sm">Update</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('cart.remove', $id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{ route('orderpage') }}" class="btn btn-primary mt-3">Continue Shopping</a>
    <a href="{{ route('checkout') }}" class="btn btn-success mt-3">Proceed to Checkout</a>
    @else
    <h5>Your cart is empty!</h5>
    @endif
</div>
@endsection
