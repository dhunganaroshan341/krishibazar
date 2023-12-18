<?php
define("SUPER_BASE",__dir__."/");

define("NAVBAR_PHP", SUPER_BASE."components/navbar.php");
define ("INDEX","Krishibazar/index.php");
define ("SIDEBAR_FARMER", SUPER_BASE."components/sidebar.php");

define ("DATABASE",SUPER_BASE."database/");
define ("SESSION_MANAGER",DATABASE."SessionManager.php");

define ("TABLE",SUPER_BASE."components/table");
define("RECENT_TABLE",TABLE."/recent_table.php");

define ("THE_COMPONENTS",SUPER_BASE."components/");
define("PRODUCT_GRID",THE_COMPONENTS."productgrid");
define("SIDE_BAR",THE_COMPONENTS."sidebar.php");
define("FOOTER",THE_COMPONENTS."footer.php");
define ("FILTER",THE_COMPONENTS."filter/filter.php");

define("SELL_PRODUCTS",THE_COMPONENTS."sellproducts");


define("LOGIN",SUPER_BASE."/signup/login.php");
define("SIGNUP",SUPER_BASE."/signup/signup.php");


//path.php


$inclusion= include_once "database/dbconnection.php";
if(!$inclusion){
    echo "you might wanna check error in path.php or dbconnection.php";    
}


define ("COMPONENTS", __DIR__."/components/");
// define ("PUBLIC",__DIR__."/public");
// define ("PUBLIC_CSS",__DIR__."/public/css/");
// define ("PUBLIC_STYLE_LOADER",__DIR__."/public/styleloader.php");
// include_once "public/styleloader.php";
define ("NAVBAR_LINKS",__DIR__."/navbar_links.php");
define ("BOOTSTRAP_CSS",__DIR__."/bootstrap/js/bootstrap.min.css");
// echo '<link rel="stylesheet" href="BOOTSTRAP_CSS">';
define ("BOOTSTRAP_JS",__DIR__."/bootstrap/js/bootstrap.min.js");

// define ("BOOTSTRAP_JS_BUNDLE",__DIR__."/bootstrap/js/bootstrap.bundle.js");
//from navbar_links
// define ("BASE_URL","/krishibazar/");
// define("FARMER_PAGE",BASE_URL."farmer/farmer.php");

// define("SETTINGS_PAGE",BASE_URL."settings/settings.php");    
// define("ABOUT_PAGE",BASE_URL."about");

// define("PRODUCT_PAGE",BASE_URL."products/products.php");
// define("SIGNUP",BASE_URL."signup/signup.php");
// define("VENDOR_PAGE",BASE_URL."vendor/vendor.php");
//navbarlinks end

?>