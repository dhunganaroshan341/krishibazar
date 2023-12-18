<?php
// Include your database connection file
require_once "../super_path.php"; // Adjust the path as needed

// Check if the necessary constants are defined
if (!defined('DATABASE')) {
    echo "DATABASE constant is not defined.";
    exit;
}

// Include the Dbconnection class
require_once DATABASE . "dbconnection.php"; // Adjust the path as needed

class UserController {
    private $connection;

    // Constructor to initialize the database connection
    public function __construct($connection) {
        $this->connection = $connection;
    }

    // Function to verify user credentials
    public function authenticateUser($email, $password) {
        // Sanitize user inputs if needed (e.g., prevent SQL injection)

        // Prepare the SQL query to fetch hashed password for the given email
        $email = $this->connection->real_escape_string($email);
        $query = "SELECT password FROM users WHERE email = '$email'";
        
        // Execute the query
        $result = $this->connection->query($query);

        if ($result && $result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $hashedPasswordFromDB = $row['password'];

            // Verify hashed password
            if (password_verify($password, $hashedPasswordFromDB)) {
                // Password verification successful
                return true;
            }
        }
        // User not found or invalid credentials
        return false;
    }
}


// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from the signup form
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Create an instance of Dbconnection and get the database connection
    $dbConnection = new Dbconnection("localhost", "root", "", "krishibazar");
    $connection = $dbConnection->getConnection();

    // Create an instance of UserController and pass the database connection
    $userController = new UserController($connection);

    // Authenticate the user
    $isAuthenticated = $userController->authenticateUser($email, $password);

    if ($isAuthenticated) {
        // User authentication successful, perform further actions (e.g., set session and redirect)
        session_start();
        $_SESSION['email'] = $email; // Store user email in session

        // Redirect to a new page after successful login
        header("Location: ../index.php");
        exit();
    } else {
        // User authentication failed, handle accordingly (e.g., display error message)
        echo "Invalid credentials. Please try again.";
    }

    // Close database connection
    $connection->close();
}
?>
