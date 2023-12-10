
<?php

include_once "path.php";  
include_once "super_path.php";
include_once NAVBAR_LINKS;
include_once DATABASE."/fetch_product_enlarge.php";
// Adding the logo to the beginning of the $links array



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>krishibazar</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/css/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php



include_once "COMPONENTS/navbar.php";

include_once "COMPONENTS/productgrid/showcaselayout.php";

include_once "COMPONENTS/table/recent_table.php";
include_once "COMPONENTS/productgrid/enlargelayout.php";

?>



<?php include_once "COMPONENTS/footer.php";?>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>