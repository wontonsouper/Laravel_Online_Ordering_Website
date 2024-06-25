@extends('layouts.app')

@section('content')
<div class="container-fluid py-5">
    <div class="container py-5">
        <h1 class="mb-4">All Orders</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Table</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->order_table }}</td>
                    <td>Rp. {{ number_format($order->order_total, 0, ',', '.') }}</td>
                    <td>{{ ucfirst($order->order_status) }}</td>
                    <td><a href="{{ route('orders.show', $order->id) }}" class="btn btn-info">View</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection