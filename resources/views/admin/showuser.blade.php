@extends('layout.admin_layout')

@section('main-content')

    <div class="p-6">
    <h2 class="text-2xl font-bold mb-4 text-white-800 text-center fw-bold text-primary">User List</h2>

    <div class="overflow-x-auto rounded-lg shadow bg-white">
        <table class="w-full min-w-[800px] table-auto border-collapse border border-gray-200 text-sm text-center">
            <thead class="bg-gray-900 text-white">
                <tr>
                    <th class="py-3 px-4 border">ID</th>
                    <th class="py-3 px-4 border">UserName</th>
                    <th class="py-3 px-4 border">Email</th>
                    <th class="py-3 px-4 border">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @if($data->count() > 0)
                    @foreach($data as $user)
                        <tr class="border-b hover:bg-gray-100 transition">
                            <td class="py-3 px-4 border">{{ $user->id }}</td>
                            <td class="py-3 px-4 border font-medium">{{ $user->name }}</td>
                            <td class="py-3 px-4 border">{{ $user->email }}</td>
                            <td class="py-3 px-4 border">
                                <div class="flex justify-center gap-2">                               
                                    <a href="{{ url('delete_user',$user->id) }}" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-lg text-xs shadow" onclick="return confirm('Are you sure you want to delete this doctor?')">
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
