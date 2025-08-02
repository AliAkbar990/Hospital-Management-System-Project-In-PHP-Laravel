<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Registration Form</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body style="background-color: #eee;">

<section class="vh-100">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black rounded-4 shadow" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center align-items-center">


              <!-- Form Column -->
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                <h1 class="text-center fw-bold mb-5">Sign up</h1>

                <form action="{{url('registerprocess')}}" method="POST">
                  @csrf
                  <!-- Name -->
                  <div class="mb-4 d-flex align-items-center">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="flex-grow-1">
                      <label for="name" class="form-label">Your Name</label>
                      <input type="text" id="name" name="name" class="form-control" required />
                    </div>
                  </div>

                  <!-- Email -->
                  <div class="mb-4 d-flex align-items-center">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="flex-grow-1">
                      <label for="email" class="form-label">Your Email</label>
                      <input type="email" id="email" name="email" class="form-control" required />
                    </div>
                  </div>

                  <!-- Password -->
                  <div class="mb-4 d-flex align-items-center">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="flex-grow-1">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" id="password" name="password" class="form-control" required />
                    </div>
                  </div>

                  <!-- Repeat Password -->
                  <div class="mb-4 d-flex align-items-center">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="flex-grow-1">
                      <label for="confirmpassword" class="form-label">Confirm your password</label>
                      <input type="password" id="confirmpassword" class="form-control" required />
                    </div>
                  </div>

                  <!-- Terms -->
                  <div class="form-check d-flex justify-content-center mb-4">
                    <input class="form-check-input me-2" type="checkbox" id="terms" required />
                    <label class="form-check-label" for="terms">
                      I agree to all statements in <a href="#">Terms of Service</a>
                    </label>
                  </div>

                  <!-- Register Button -->
                  <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary btn-lg w-100">Register</button>
                  </div>

                  <div class="mt-4 text-center">
                    <p class="mb-0">Already have an account? 
                      <a href="{{url('login')}}" class="text-primary fw-bold">Login</a>
                    </p>
                  </div>

                </form>
              </div>

              <!-- Image Column -->
              <div class="col-md-10 col-lg-6 col-xl-7 order-1 order-lg-2 d-flex justify-content-center">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                     class="img-fluid" alt="Sample image" style="max-height: 400px;">
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
