@extends('layouts.app')

@section('content')

<!-- Review Table Start -->
<section class="page-section portfolio" id="reviews">
    <div class="container">
        <h1>Daftar Reviews</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Text</th>
                    <th scope="col">Approved</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($review as $rv)
                    <tr>
                        <td>{{ $rv->id }}</td>
                        <td>{{ $rv->review_name }}</td>
                        <td>{{ $rv->review_text }}</td>
                        <td>
                            <form action="{{ route('review.approve', $rv->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('put')
                                <input type="radio" name="review_approved" value="1" {{ $rv->review_approved == 1 ? 'checked' : '' }}> Yes
                                <input type="radio" name="review_approved" value="0" {{ $rv->review_approved == 0 ? 'checked' : '' }}> No
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('review.destroy', $rv->id) }}" method="POST" class="d-inline">
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
<!-- Review Table End -->

@endsection