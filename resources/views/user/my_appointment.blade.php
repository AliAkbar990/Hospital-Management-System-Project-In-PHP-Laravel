<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">

  <style>
      h2 {
        font-weight: bold;
        color: #333;
      }
    
      .table th {
        background-color: #343a40;
        color: white;
      }
    
      .table td {
        vertical-align: middle;
      }
    
      .badge-success {
        background-color: #28a745;
      }
    
      .badge-warning {
        background-color: #ffc107;
        color: #000;
      }
    
      .badge-danger {
        background-color: #dc3545;
      }
    
      @media (max-width: 768px) {
        .table th, .table td {
          font-size: 14px;
          padding: 10px;
        }
      }
</style>

</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
              <span class="divider">|</span>
              @if(Auth::check())
                 <a href="#"><span class="mai-mail text-primary"></span> {{ Auth::user()->email }}</a>
              @else
                 <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
              @endif
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{url('user')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('about')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('doctor')}}">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('review')}}">Feedback</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('contact')}}">Contact</a>
            </li>
            <li class="nav-item active">
              <a style="background: greenyellow; color: white; border-radius: 4px; text-shadow: none" class="nav-link" href="{{url('myappointment')}}">My Appointment</a>
            </li>
            <li class="nav-item">
              <!-- <a style="background: greenyellow; color: black; border-radius: 4px; text-shadow: none" class="nav-link" href="{{url('contact')}}">Logout</a> -->
              <a class="nav-link" href="{{url('logout')}}"><button type="button" class="btn btn-danger">Logout</button></a>
            </li>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>


  <!-- Bootstrap styled, responsive, and database-driven table -->
  <div class="container mt-5">
    <h2 class="text-center mb-4">My Appointments</h2>
    <div class="table-responsive">
      <table class="table table-bordered table-hover text-center">
        <thead class="thead-dark">
          <tr>
            <th>Doctor Name</th>
            <th>Date</th>
            <th>Message</th>
            <th>Status</th>
            
          </tr>
        </thead>
        <tbody>
          @if($appoint->isEmpty())
            <tr>
              <td colspan="4" class="text-center text-danger font-weight-bold">No record found</td>
            </tr>
            @else
              @foreach($appoint as $appoints)
                <tr>
                    <td>{{ $appoints->doctor }}</td>
                    <td>{{ $appoints->date }}</td>
                    <td>{{ $appoints->message }}</td>
                    <td>
                        <span class="badge badge-{{ $appoints->status == 'Approved' ? 'success' : ($appoints->status == 'Pending' ? 'warning' : 'danger') }}">
                        {{ $appoints->status }}
                        </span>
                        </td>
                       
                </tr>
              @endforeach
          @endif
          </tbody>
        </table>
      </div>
    </div>



<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>