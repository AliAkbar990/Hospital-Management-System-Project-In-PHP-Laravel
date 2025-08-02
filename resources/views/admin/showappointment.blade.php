@extends('layout.admin_layout')

@section('main-content')

<!-- Custom Styles -->
<style>
    .table {
        width: 100%;
        table-layout: auto;
        border-collapse: collapse;
    }

    .table th, .table td {
        padding: 16px 12px;
        font-size: 16px;
        white-space: nowrap;
    }

    th, td {
        min-width: 120px;
    }

    .table thead th {
        position: sticky;
        top: 0;
        z-index: 1;
        background-color: #000;
        color: #fff;
        font-size: 16px;
    }

    .table tbody td {
        background-color: #fff;
        color: #000;
        font-size: 15px;
        vertical-align: middle;
    }

    /* Zebra striping for better UX */
    .table tbody tr:nth-child(odd) {
        background-color: #f9f9f9;
    }

    .table tbody tr:hover {
        background-color: #f1f1f1;
    }

    .btn {
        padding: 6px 10px;
        font-size: 14px;
        border-radius: 4px;
    }

    .btn i {
        font-size: 16px;
    }

    .btn a {
        color: white;
        text-decoration: none;
    }

    .btn a:hover {
        color: white;
    }

    /* Responsive tweaks */
    @media (max-width: 768px) {
        .table {
            font-size: 13px;
        }

        .table th, .table td {
            padding: 10px;
        }

        .btn {
            padding: 4px 8px;
            font-size: 12px;
        }

        .btn i {
            font-size: 14px;
        }
    }

    /* Scrollable Table */
    .table-responsive {
        overflow-x: auto;
    }

    .text-blue {
        color: #007bff;
    }
</style>

<!-- Appointments Table -->
<div class="container-fluid page-body-wrapper">
    <div class="container mt-3">
        <h2 class="text-center text-blue mb-4">Appointment List</h2>

        <div class="table-responsive">
            <table class="table table-bordered text-center w-100">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Patient Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Weight</th>
                        <th>Height</th>
                        <th>Date</th>
                        <th>Doctor Name</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th>Status</th>
                        <th>Approved</th>
                        <th>Canceled</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $appoint)
                    <tr>
                        <td>{{ $appoint->id }}</td>
                        <td>{{ $appoint->name }}</td>
                        <td>{{ $appoint->email }}</td>
                        <td>{{ $appoint->age }}</td>
                        <td>{{ $appoint->weight }}</td>
                        <td>{{ $appoint->height }}</td>
                        <td>{{ $appoint->date }}</td>
                        <td>{{ $appoint->doctor }}</td>
                        <td>{{ $appoint->phone }}</td>
                        <td>{{ $appoint->message }}</td>
                        <td>{{ $appoint->status }}</td>
                        <td>
                            <a class="btn btn-success" href="{{ url('approved', $appoint->id) }}">Approved</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="{{ url('canceled', $appoint->id) }}">Canceled</a>
                        </td>
                        <td>
                            <a href="{{ url('printData', $appoint->id) }}" class="btn btn-primary" title="Print">
                                <i class="bi bi-printer"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

@endsection
