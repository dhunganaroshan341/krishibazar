<?php
$inclusion= include_once "config/dbconnection.php";
if(!$inclusion){
    echo "you might wanna check error in path.php or dbconnection.php";    
}


define ("COMPONENTS", __DIR__."/components/");
define ("PUBLIC",__DIR__."/public");
define ("PUBLIC_CSS",__DIR__."/public/css/");
define ("PUBLIC_STYLE_LOADER",__DIR__."/public/styleloader.php");
include_once "public/styleloader.php";
define ("NAVBAR_LINKS",__DIR__."/navbar_links.php");
define ("BOOTSTRAP_CSS",__DIR__."/bootstrap/js/bootstrap.min.css");
// echo '<link rel="stylesheet" href="BOOTSTRAP_CSS">';
define ("BOOTSTRAP_JS",__DIR__."/bootstrap/js/bootstrap.min.js");
define ("BOOTSTRAP_JS_BUNDLE",__DIR__."/bootstrap/js/bootstrap.bundle.js");
function pathtester(){
    echo "path.php success";
}
?>

