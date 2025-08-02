@extends('layout.admin_layout')

@section('main-content')
    <!-- <h1 class="text-center">This is Doctor Page</h1> -->

    @if(session()->has('message'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">

            {{ session()->get('message') }}

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">

                <span aria-hidden="true">&times;</span>

            </button>

        </div>

    @endif



    <button class="mt-3" style="background-color: blue; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">
        <a href="{{ url('add_doctor') }}" style="color: white; text-decoration: none; font-weight: bold;">
            <i class="bi bi-person-plus-fill"></i> Add Doctor
        </a>
    </button>

    <div class="p-6">
    <h2 class="text-2xl font-bold mb-4 text-white-800 text-center fw-bold text-primary">Doctor List</h2>

    <div class="overflow-x-auto rounded-lg shadow bg-white">
        <table class="w-full min-w-[800px] table-auto border-collapse border border-gray-200 text-sm text-center">
            <thead class="bg-gray-900 text-white">
                <tr>
                    <th class="py-3 px-4 border">ID</th>
                    <th class="py-3 px-4 border">Image</th>
                    <th class="py-3 px-4 border">Name</th>
                    <th class="py-3 px-4 border">Phone</th>
                    <th class="py-3 px-4 border">Email</th>
                    <th class="py-3 px-4 border">Speciality</th>
                    <th class="py-3 px-4 border">Status</th>
                    <th class="py-3 px-4 border">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @if($doctors->count() > 0)
                    @foreach($doctors as $doctor)
                        <tr class="border-b hover:bg-gray-100 transition">
                            <td class="py-3 px-4 border">{{ $doctor->id }}</td>
                            <td class="py-3 px-4 border">
                                @if($doctor->doctorimage)
                                    <div class="flex justify-center">
                                        <img src="{{ asset('images/' . $doctor->doctorimage) }}"
                                             class="w-12 h-12 object-cover rounded-full border border-gray-300 shadow"
                                             alt="Doctor Image">
                                    </div>
                                @else
                                    <span class="text-gray-400 italic">No Image</span>
                                @endif
                            </td>
                            <td class="py-3 px-4 border font-medium">{{ $doctor->name }}</td>
                            <td class="py-3 px-4 border">{{ $doctor->phone }}</td>
                            <td class="py-3 px-4 border">{{ $doctor->email }}</td>
                            <td class="py-3 px-4 border">{{ $doctor->speciality }}</td>
                            <td class="py-3 px-4 border">
                                @if($doctor->status == 1)
                                    <button class="btn btn-success">Available</button>
                                @else
                                    <button class="btn btn-danger">NotAvail</button>
                                @endif
                            </td>

                            <td class="py-3 px-4 border">
                                <div class="flex justify-center gap-2">
                                    <a href="{{ url('openedit_doctor', $doctor->id) }}" class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded-lg text-xs shadow">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>

                                    <a href="{{ url('delete_doctor', $doctor->id) }}" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-lg text-xs shadow" onclick="return confirm('Are you sure you want to delete this doctor?')">
                                        <i class="bi bi-trash3-fill"></i> 
                                    </a>

                                </div>
                            </td>

                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="7" class="py-4 text-gray-500 italic">No doctors found.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>


<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

@endsection
