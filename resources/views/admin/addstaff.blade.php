<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Employee</title>
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
            <h2 class="text-center text-primary">Add Employee</h2>
            <form action="/add" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label" Employee Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Employee Name" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Phone No</label>
                    <input type="text" name="phone" class="form-control" placeholder="Enter Phone Number" required>
                </div>



                <div class="mb-3">
                    <label class="form-label">Work Type</label>
                    <select name="work" class="form-select" required>
                        <option value="">--Select--</option>
                        <option value="Nurses">Nurses</option>
                        <option value="Receptionist">Receptionist</option>
                        <option value="Maintenance">Maintenance</option>
                        <option value="Other">Other</option>
                       
                    </select>
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
