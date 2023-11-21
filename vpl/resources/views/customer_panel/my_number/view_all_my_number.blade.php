@extends('layout')
@section('view_all_my_number')

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Link to Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<title>Bootstrap Form</title>

</head>
<body>

<div class="container mt-4">
  <div class="row">
    <!-- First column for the image -->
    <div class="col-md-6">
      <img src=" images/vpll.jpeg" alt="Your Image" class="img-fluid">
    </div>
    <!-- Second column for the text -->
    <div class="col-md-6">
      <p>First line of text</p>
      <p>Second line of text</p>
    </div>
  </div>
</div>

<!-- Link to Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

@endsection