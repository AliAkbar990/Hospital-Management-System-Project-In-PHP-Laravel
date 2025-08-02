@extends('layout.admin_layout')

@section('main-content')
<div class="container mt-5">
    <!-- <div class="d-flex justify-content-between align-items-center mb-4"> -->
        <h2 class="fw-bold text-primary text-center">Feedback List</h2>
        <br><br>
    <!-- </div> -->

    <div class="table-responsive">
        <table class="table table-hover table-bordered align-middle shadow">
            <thead class="table-primary text-center">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Feedback</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($feedback as $r)
                <tr class="text-center">
                    <td>{{ $r->id }}</td>
                    <td>{{ $r->name }}</td>
                    <td>{{ $r->email }}</td>
                    <td>{{ $r->rating }}</td>
                    <td>{{ $r->feedback }}</td>
                    <td>
                       
                        <a class="btn btn-danger btn-sm" href="{{ url('delete_feedback',$r -> id) }}" onclick="return confirm('Are you sure You Want To Delete This Feedback.?')">
                            <i class="bi bi-trash-fill"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

{{-- Bootstrap Icons --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
@endsection
