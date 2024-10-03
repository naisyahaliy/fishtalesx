<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Review Section</title>
  <link rel="stylesheet" href="{{ asset('asset/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
  <div class="container mt-5">
    <h2>Reviews</h2>

    <div class="card mb-4" style="background-color: lightblue;">
      <div class="card-header">Leave a Review</div>
      <div class="card-body">
        <form action="/review" method="POST">
            @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
          </div>
          <div class="mb-3">
            <label for="review" class="form-label">Your Review</label>
            <textarea class="form-control" id="review" name="review" rows="3" placeholder="Write your review here"></textarea>
          </div>
          <div class="mb-3">
            <label for="rating" class="form-label">Rating</label>
            <select class="form-select" id="rating" name="rating">
              <option selected>Choose a rating</option>
              <option value="1">1/10</option>
              <option value="2">2/10</option>
              <option value="3">3/10</option>
              <option value="4">4/10</option>
              <option value="5">5/10</option>
              <option value="6">6/10</option>
              <option value="7">7/10</option>
              <option value="8">8/10</option>
              <option value="9">9/10</option>
              <option value="10">10/10</option>
            </select>
          </div>
         <button type="submit" class="btn" style="background-color: rgb(64, 145, 172);">Submit Review</button>
        </form>
      </div>
    </div>

    <script src="{{ asset('asset/bootstrap/css/bootstrap.min.css')}}"></script>
</body>
</html>
