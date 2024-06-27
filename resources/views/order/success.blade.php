@extends('layouts.template')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header">
                    <h2>Order Placed Successfully!</h2>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <p>Thank you for your order. Your order has been placed successfully and is now being processed.</p>
                    <a href="{{ route('orderpage') }}" class="btn btn-secondary">Continue Shopping</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection