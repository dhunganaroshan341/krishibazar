<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Website</title>

  <!-- Bootstrap CSS link -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    .sidebar {
      height: 100vh;
      width: 250px;
      background-color: #28a745; /* Green color */
      position: fixed;
      padding-top: 20px;
    }

    .sidebar a {
      padding: 15px;
      text-decoration: none;
      color: #fff;
      display: block;
      transition: background-color 0.3s;
    }

    .sidebar a:hover {
      background-color: #218838; /* Darker green on hover */
    }
  </style>
</head>
<body>

  <div class="sidebar">
    <a href="#">Upload new</a>
    <a href="#">Set producer</a>
    <a href="#">existing</a>
    <a href="#">Detail</a>
    <a href="#">News</a>
    <a href="#">Help</a>

  </div>

  <!-- Your website content goes here -->
  <div class="content">
    <h1>Your Content</h1>
    <p>This is your main content area.</p>
  </div>

  <!-- Bootstrap JS and Popper.js scripts (optional but often used) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
