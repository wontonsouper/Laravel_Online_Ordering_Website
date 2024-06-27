@extends('layouts.template')

@section('content')
<div class="container-fluid py-5">
    <div class="container py-5">
        <h1 class="mb-4">Billing details</h1>
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
        <form action="{{ route('order.store') }}" method="POST">
            @csrf
            <div class="row g-5">
                <div class="col-md-12 col-lg-6 col-xl-7">
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="form-item w-100">
                                <label class="form-label my-3">Table Number<sup>*</sup></label>
                                <input type="text" name="order_table" class="form-control" placeholder="Look for the standee on your table." required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="form-item w-100">
                                <label class="form-label my-3">Notes</label><br>
                                <textarea name="order_note" class="form-control" spellcheck="false" cols="30" rows="11" placeholder="Order Notes (Optional)"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-5">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Picture</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cart as $id => $details)
                                <tr>
                                    <th scope="row">
                                        <div class="d-flex align-items-center mt-2">
                                            <img src="{{ asset('images/menus/'.$details['image']) }}" class="img-fluid rounded-circle" style="width: 90px; height: 90px;" alt="">
                                        </div>
                                    </th>
                                    <td class="py-5">{{ $details['name'] }}</td>
                                    <td class="py-5">Rp. {{ number_format($details['price'], 0, ',', '.') }}</td>
                                    <td class="py-5">{{ $details['quantity'] }}</td>
                                    <input type="hidden" name="products[{{ $id }}][id]" value="{{ $id }}">
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-12 text-end">
                        <h4>Total Price: Rp. {{ number_format(array_reduce($cart, function($carry, $item) { return $carry + ($item['price'] * $item['quantity']); }, 0), 0, ',', '.') }}</h4>
                    </div>
                    <div class="row g-4 text-center align-items-center justify-content-center pt-4">
                        <button type="submit" class="btn border-secondary py-3 px-4 text-uppercase w-100 text-primary">Place Order</button>
                    </div>
                    <div class="row g-4 text-center align-items-center justify-content-center pt-4">
                        <a href="{{ route('cart') }}" class="btn border-secondary py-3 px-4 text-uppercase w-100 text-primary">Go to Cart</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
