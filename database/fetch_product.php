<!-- PHP code to retrieve products from the database -->
<?php
// Establish a database connection
$servername = "your_servername";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch products
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

// Close the connection
$conn->close();
?>

<!-- HTML to display products in a grid -->
<!DOCTYPE html>
<html>
<head>
    <title>Product Grid</title>
    <style>
        /* CSS for grid layout */
        .grid-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* Adjust the number of columns as needed */
            gap: 20px;
        }
        .grid-item {
            border: 1px solid #ccc;
            padding: 15px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="grid-container">
        <?php
        // Display fetched products in a grid
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                // Adjust the below line based on your database columns
                echo '<div class="grid-item">' . $row["product_name"] . '<br>' . $row["description"] . '<br>$' . $row["price"] . '</div>';
            }
        } else {
            echo "0 results";
        }
        ?>
    </div>
</body>
</html>
