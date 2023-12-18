<?php
define ("BASE_URL", __DIR__."/");
define("FARMER_PAGE",BASE_URL."farmer/farmer.php");
define("SETTINGS_PAGE","/krishibazar/settings/settings.php");
define("ABOUT_PAGE",BASE_URL."about");
define("HOME_PAGE",BASE_URL."index.php");
define("PRODUCT_PAGE",BASE_URL."products/products.php");
define("SIGNUP",BASE_URL."signup/signup.php");
define("VENDOR_PAGE",BASE_URL."vendor/vendor.php");
// Initialize an empty array if $links is not set
$links = [];
$links = array(
    array(
        'url' => VENDOR_PAGE, // Replace with the URL for your vendors page
        'name' => 'Vendors'
    ),
    array(
        'url' => PRODUCT_PAGE, // Replace with the URL for your products page
        'name' => 'Products'
    ),
    array(
        'url' => HOME_PAGE, // Replace with the URL for your home page
        'name' => 'Home'
    ),
   
  
    array(
        'url' => FARMER_PAGE, // Replace with the URL for your farmers page
        'name' => 'Add_new+'
    ),
    array(
        'url' => SETTINGS_PAGE, // Replace with the URL for your settings page
        'name' => 'Settings'
    ),
    array(
        'url' => ABOUT_PAGE, // Replace with the URL for your about page
        'name' => 'About'
    ),
    // Add more navbar items as needed following the same structure
);


// Adding the logo to the beginning of the $links array



?>