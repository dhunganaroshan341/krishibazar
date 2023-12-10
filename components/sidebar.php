

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

  <div class="sidebar">
    <a href="" class="sidebar-link" data-target="../productgrid/sellproducts.php">upload new</a>
    <a href="#">Set producer</a>
    <a href="#">existing</a>
    <a href="#">Detail</a>
    <a href="#">News</a>
    <a href="#">Help</a>

  </div>

  <!-- Your website content goes here -->


  <!-- Bootstrap JS and Popper.js scripts (optional but often used) -->
 
  <div class="container" id="container">
  <?php  
    include_once SIDEBAR_FARMER;
  ?>

  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('.sidebar-link').click(function(e) {
        e.preventDefault(); // Prevent default link behavior

        var targetComponent = $(this).data('target'); // Get the target PHP component
        // AJAX request to load the target component content
        $.ajax({
            url: 'krishibazar/component/productgrid/' + targetComponent,
            type: 'GET',
            success: function(response) {
                // Replace the content in the remaining side of the screen with the loaded component content
                $('.remaining-side-content').html(response);
            },
            error: function() {
                alert('Error loading content');
            }
        });
    });
});
</script>