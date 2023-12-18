<?php
    define ("THE_BASE_URL","/krishibazar/");
    define("FARMER_PAGE",THE_BASE_URL."/farmer/farmer.php");

    define("SETTINGS_PAGE",THE_BASE_URL."settings/settings.php");
    define("ABOUT_PAGE",THE_BASE_URL."about");

    define("PRODUCT_PAGE",THE_BASE_URL."products/products.php");
    define("SIGNUP",THE_BASE_URL."signup/signup.php");
    define("VENDOR_PAGE",THE_BASE_URL."vendor/vendor.php");
    // Initialize an empty array if $links is not set
    $links = [];
    $links = array(
        array(
            'url' => FARMER_PAGE, // Replace with the URL for your farmers page
            'name' => 'Add_New'
        ),
        array(
            'url' => PRODUCT_PAGE, // Replace with the URL for your products page
            'name' => 'Products'
        ),
        array(
            'url' => VENDOR_PAGE, // Replace with the URL for your vendors page
            'name' => 'Vendors'
        ),
        array(
            'url' => '../index.php', // Replace with the URL for your home page
            'name' => 'Home'
        ),
        array(
            'url' => SETTINGS_PAGE, // Replace with the URL for your settings page
            'name' => 'Settings'
        ),
        array(
            'url' => ABOUT_PAGE, // Replace with the URL for your about page
            'name' => 'Help'
        ),
        // Add more navbar items as needed following the same structure
    );


// Adding the logo to the beginning of the $links array



?>