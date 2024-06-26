@extends('layouts.app')

@section('content')
<div class="container-fluid py-5">
    <div class="container py-5">
        <h1 class="mb-4">Order Details</h1>
        <div class="card">
            <div class="card-header">
                Order #{{ $order->id }}
            </div>
            <div class="card-body">
                <h5 class="card-title">Table: {{ $order->order_table }}</h5>
                <p class="card-text">Notes: {{ $order->order_note }}</p>
                <p class="card-text">Status: {{ ucfirst($order->order_status) }}</p>
                <p class="card-text">Total: Rp. {{ number_format($order->order_total, 0, ',', '.') }}</p>
                <h5 class="card-title mt-4">Products</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($order->orderProducts as $product)
                        <tr>
                            <td>{{ $product->product_name }}</td>
                            <td>Rp. {{ number_format($product->product_price, 0, ',', '.') }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>Rp. {{ number_format($product->total_price, 0, ',', '.') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
