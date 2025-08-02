@extends('layout.user_layout')

@section('user')

<!-- Patient Feedback Section -->
<main class="container my-5">
  <h2 class="text-center mb-4" style="color: black;">Patient Feedback</h2>

  <!-- Feedback Form -->
  <div class="row justify-content-center">
    <div class="col-md-8 feedback-form">
      <form method="POST" action="/add_feedback">
        @csrf
        <div class="form-group">
          <label for="name">Full Name</label>
          <input type="text" class="form-control" id="name" name="name" required placeholder="Enter your name">
        </div>

        <div class="form-group mt-3">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" name="email" required placeholder="name@example.com">
        </div>

        <div class="form-group mt-3">
          <label for="rating">How would you rate your experience?</label>
          <select class="form-control" id="rating" name="rating" required>
            <option>Choose...</option>
            <option value="Excellent">Excellent</option>
            <option value="Very Good">Very Good</option>
            <option value="Good">Good</option>
            <option value="Fair">Fair</option>
            <option value="Poor">Poor</option>
          </select>
        </div>

        <div class="form-group mt-3">
          <label for="feedback">Your Feedback</label>
          <textarea class="form-control" id="feedback" name="feedback" rows="4" required placeholder="Write your feedback..."></textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-4 w-100">Submit Feedback</button>
      </form>
    </div>
  </div>
</main>

<!-- User Reviews Section -->
<h2 class="text-center mb-5 text-primary">User Feedback Gallery</h2>

<div class="container">
  <div class="row">
    @forelse($reviews as $review)
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100 shadow-sm border-0">
          <!-- Removed image, added background color to the card -->
          <div class="card-body">
            <h5 class="card-title text-primary">{{ $review->name }}</h5>
            <p class="card-subtitle mb-2 text-muted">{{ $review->email }}</p>

            <p class="mt-2">
              <strong>Rating:</strong>
              <span class="badge 
                @switch($review->rating)
                    @case('Excellent') bg-success @break
                    @case('Very Good') bg-primary @break
                    @case('Good') bg-secondary @break
                    @case('Fair') bg-warning @break
                    @default bg-danger
                @endswitch
              ">
                {{ $review->rating }}
              </span>
            </p>

            <p class="card-text"><i>"{{ $review->feedback }}"</i></p>
          </div>
          <div class="card-footer text-muted text-end small">
            Reviewed {{ $review->created_at->diffForHumans() }}
          </div>
        </div>
      </div>
    @empty
      <p class="text-center text-warning">No reviews found.</p>
    @endforelse
  </div>
</div>

<!-- Back to Top Button -->
<div class="back-to-top" onclick="window.scrollTo(0, 0);">
  ↑
</div>

<!-- Custom Styles -->
<style>
  /* General Styles */
  body {
    background-color: #f8f9fc;
    font-family: 'Arial', sans-serif;
  }

  h2 {
    font-size: 2.5rem;
    color: #333;
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 30px;
  }

  /* Review Box Style */
  .card-body {
    background: #fff;
    padding: 20px;
    border-radius: 12px;
  }

  .card-body:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  }

  .card-title {
    color: #007bff;
    font-size: 1.25rem;
    font-weight: 600;
  }

  .card-subtitle {
    font-size: 1rem;
    color: #6c757d;
  }

  .badge {
    font-size: 1.1rem;
    font-weight: bold;
    padding: 8px 15px;
    text-transform: capitalize;
    border-radius: 12px;
  }

  .bg-danger {
    background-color: #dc3545 !important;
    color: white;
  }

  .bg-warning {
    background-color: #ffc107 !important;
    color: white;
  }

  .bg-secondary {
    background-color: #6c757d !important;
    color: white;
  }

  .bg-primary {
    background-color: #007bff !important;
    color: white;
  }

  .bg-success {
    background-color: #28a745 !important;
    color: white;
  }

  .bg-dark {
    background-color: #343a40 !important;
    color: white;
  }

  .card-text {
    font-size: 1.1rem;
    color: #555;
    line-height: 1.5;
    font-style: italic;
  }

  .card-footer {
    text-align: right;
    color: #777;
    font-size: 0.85rem;
  }

  .text-center {
    text-align: center;
    color: #f39c12;
    font-size: 1.2rem;
    font-weight: 600;
  }

  /* Responsive Design */
  @media (max-width: 768px) {
    h2 {
      font-size: 2rem;
    }

    .card-body {
      padding: 15px;
    }

    .card-footer {
      font-size: 0.85rem;
    }
  }

  @media (max-width: 480px) {
    h2 {
      font-size: 1.5rem;
    }

    .card-body {
      padding: 10px;
    }

    .card-footer {
      font-size: 0.75rem;
    }
  }
</style>

@endsection
