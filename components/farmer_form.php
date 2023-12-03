<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Product Form</title>

  <!-- Bootstrap CSS link -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    .content {
      padding: 20px;
    }
  </style>
</head>
<body>

  <!-- Your website content goes here -->
  <div class="content">
    <h1>Add New Product</h1>

    <!-- Product Form -->
    <form>
      <div class="form-group">
        <label for="productName">Product Name</label>
        <input type="text" class="form-control" id="productName" placeholder="Enter product name" required>
      </div>

      <div class="form-group">
        <label for="quantity">Quantity</label>
        <input type="number" class="form-control" id="quantity" placeholder="Enter quantity" required>
      </div>

      <div class="form-group">
        <label for="price">Price</label>
        <input type="number" class="form-control" id="price" placeholder="Enter price" required>
      </div>

      <div class="form-group">
        <label for="details">Details</label>
        <textarea class="form-control" id="details" rows="3" placeholder="Enter product details"></textarea>
      </div>

      <div class="form-group">
        <label for="image">Product Image</label>
        <input type="file" class="form-control-file" id="image" accept="image/*">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <!-- Bootstrap JS and Popper.js scripts (optional but often used) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
