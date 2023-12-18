<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<?php
      include "../super_path.php";
      include "../path.php";
    if(!include "../navbar_links_farmers.php"){
       die("faliure in navbar link inclusion check farmer.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddNew</title>
    <!-- Bootstrap CSS link -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="farmerContainer" id="farmerConatianer">
        <?php 
      
        include NAVBAR_PHP;
        ?>

        <div class="container-fluid mt-3">
                <div class="row">
                    <!-- Sidebar on the Left -->
                    <div class="col-md-3 bg-success">
                        <?php 
                         $links = [
                            ["title" => "New Products ", "url" => SELL_PRODUCTS."farmer_preset_form.php"],
                            ["title" => "Set Producer", "url" => "#"],
                            ["title" => "Upload Preset", "url" => ""],
                            ["title" => "Detail", "url" => "#"],
                            ["title" => "News", "url" => "#"],
                            ["title" => "Help", "url" => "#"]
                        ];
                        include SIDE_BAR; ?>
                    </div>
                    
                    <!-- Form on the Right -->
                    <div class="col-md-9 bg-light">
                        <?php include SELL_PRODUCTS."/farmer_preset_form.php" ?>
                    </div>
                </div>
                <div class="column">
                    <?php include_once SELL_PRODUCTS."/vendor_sale_table.php";
                    ?>
                </div>
        </div>
    </div>

    <!-- Your existing style -->
    <style>
        /* Your custom styles here */
        /* Adjustments for the layout */
        .farmerContainer {
            padding-top: 20px; /* Adjust container padding as needed */
        }
    </style>
</body>
</html>
