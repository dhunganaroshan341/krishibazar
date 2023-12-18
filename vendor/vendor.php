<?php
  
// Attempt to include the files using try-catch blocks
try {
    include_once "../super_path.php";
    include_once "../path.php";

    if (!@include_once "../navbar_links_vendors.php") {
        throw new Exception("Navbar couldn't be loaded. Please refresh the page.");
    }

    // $NavObj = new Navbar_links('vendor');
    // If the include was successful, proceed with further code
} catch (Exception $e) {
    // Handle the exception
    die($e->getMessage()); // Display the error message
}
?>

<!-- <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"> -->
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>VendorPage</title>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<?php  include NAVBAR_PHP; ?> 
   <section class  = "top-section">
    <?php
      // include_once NAVBAR_PHP;
      $links = [
        ["title" => "Recent Buyers/sellers ", "url" =>"#recent-table"],
        ["title" => " ", "url" => "#"],
        ["title" => "products for farmers", "url" => "#"],
        ["title" => "Agricultural News", "url" => "#"],
        ["title" => "Help", "url" => "#"]
    ];

  ?>
   <div class="margin-2 ">
    <?php
    include_once SIDE_BAR;
   
   
    
    ?>
  </div>

<div class="container d-flex flex-column">
  <?php
      // including sidebar and giving linnks to each page
    
      //including your recent transaction
      include_once FILTER;
      include_once RECENT_TABLE;
    ?>
    </div>
   </section> 
   <section class="vendorsProduct" id="vendorsProduct">
    <?php include_once PRODUCT_GRID."/enlargelayout.php";?>
   </section>
<section id="vendorsInfo">

</section>

<script>
        $(document).ready(function(){
            $('.nav-link').click(function(e){
                e.preventDefault(); // Prevent default link behavior

                var url = $(this).attr('href'); // Get the URL from the clicked link

                // Load content from the URL and place it in the content div
                $('#dynamicContent').load(url);
            });
        });
    </script>
    
</body>
</html>