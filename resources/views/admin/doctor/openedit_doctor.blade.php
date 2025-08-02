<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Doctor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Set maximum width and height */
        .custom-card {
            max-width: 600px; /* Adjust as needed */
            max-height: 90vh; /* Maximum height to fit screen */
            overflow-y: auto; /* Scroll if content overflows */
        }
    </style>
</head>
<body class="bg-light d-flex justify-content-center align-items-center" style="min-height: 100vh;">

    <div class="container d-flex justify-content-center">
        <div class="card shadow-lg p-4 custom-card w-100">
            <h2 class="text-center text-primary">Update Doctor</h2>
            <form action="{{url('UpdateDoctor')}}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="mb-3">
                    <label class="form-label">Id</label>
                    <input type="text" name="id" value="{{$doctors->id}}" class="form-control" placeholder="Enter Doctor Name" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Doctor Name</label>
                    <input type="text" name="name" value="{{$doctors->name}}" class="form-control" placeholder="Enter Doctor Name" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Phone No</label>
                    <input type="text" name="phone" value="{{$doctors->phone}}" class="form-control" placeholder="Enter Phone Number" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email-Id</label>
                    <input type="email" name="email" value="{{$doctors->email}}" class="form-control" placeholder="Enter Email" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Speciality</label>
                    <select name="speciality" value="{{$doctors->speciality}}" class="form-select" required>
                        <option value="">--Select--</option>
                        <option value="Dermatologists">Dermatologists</option>
                        <option value="Neurologist">Neurologist</option>
                        <option value="Cardiologist">Cardiologist</option>
                        <option value="Anesthesiology">Anesthesiology</option>
                        <option value="Psychiatrists">Psychiatrists</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" value="{{$doctors->status}}" class="form-select" required>
                        <option value="">--Select--</option>
                        <option value="1">Available</option>
                        <option value="0">Not Available</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Doctor Image</label>
                    <input type="file" name="doctorimage" value="{{$doctors->doctorimage}}" class="form-control">
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success w-100">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
