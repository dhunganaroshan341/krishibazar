
<div class="farmerContainer" id = "farmerConatianer">
<?php 
include "../super_path.php";
include "../path.php";

include "../navbar_links_farmers.php";

include NAVBAR_PHP;
echo '<div class="afterNav" id="afterNav"> ';
include SIDEBAR_FARMER;





?>


<div class="remainingright" id = "remainingright">
    <?php include COMPONENTS."productgrid/sellproducts.php";?>

</div>
</div>
</div>
<style>
    .afterNav{
        display:flex;   
        flex-direction: row;

        

    }
   .remainingright{
        width:400px;
        overflow: hidden;
    }
    .remainingright form{
        width:200px;
    } */
    afterNav div{margin:0 5px; width :auto;}
    form{width:100%;}
</style>