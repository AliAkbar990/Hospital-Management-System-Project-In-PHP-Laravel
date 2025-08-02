@extends('layout.admin_layout')

@section('main-content')
<a class="btn btn-success btn-lg shadow" href="/add_staff">
            <i class="bi bi-person-plus-fill me-2"></i> Add Staff
        </a>
<div class="container mt-5">
    <!-- <div class="d-flex justify-content-between align-items-center mb-4"> -->
        <!-- <h2 class="fw-bold text-primary">Employee List</h2> -->
        
        <!-- <br><br><br> -->
        <h2 class="fw-bold text-primary" style="text-align: center;">Employee List</h2>
        <br><br>
    <!-- </div> -->

    <div class="table-responsive">
        <table class="table table-hover table-bordered align-middle shadow">
            <thead class="table-primary text-center">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Work</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($staff as $r)
                <tr class="text-center">
                    <td>{{ $r->id }}</td>
                    <td>{{ $r->name }}</td>
                    <td>{{ $r->work }}</td>
                    <td>{{ $r->phone }}</td>
                    <td class="py-3 px-4 border">
                        <div class="flex justify-center gap-2">
                        <a href="/update/{{ $r->id }}" class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded-lg text-xs shadow">
                            <i class="bi bi-pencil-square"></i> 
                        </a>
                        <a href="/delete/{{ $r->id }}" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-lg text-xs shadow" onclick="return confirm('Are you sure you want to delete this doctor?')">
                            <i class="bi bi-trash3-fill"></i> 
                        </a>
                        </div>
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
