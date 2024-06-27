@extends('layouts.app')

@section('content')
<div class="container-fluid py-5">
    <div class="container py-5">
        <h1 class="mb-4">All Orders</h1>
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
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">Table</th>
                    <th scope="col">Total</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->order_table }}</td>
                    <td>Rp. {{ number_format($order->order_total, 0, ',', '.') }}</td>
                    <td>
                        <form action="{{ route('order.update', $order->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('put')
                            <input type="radio" name="order_status" value="pending" {{ $order->order_status == 'pending' ? 'checked' : '' }}> Pending
                            <input type="radio" name="order_status" value="completed" {{ $order->order_status == 'completed' ? 'checked' : '' }}> Completed
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </td>
                    <td>
                        <a href="{{ route('order.show', $order->id) }}" class="btn btn-info">View Order</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
