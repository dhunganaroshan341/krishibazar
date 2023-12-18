<?php
class Dbconnection {
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $connection;

    // Constructor to set database credentials
    public function __construct($servername, $username, $password, $dbname) {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
    }

    // Method to establish a database connection
    public function connect() {
        $this->connection = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        // Check connection
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }

        return $this->connection;
    }

    // Method to get the database connection
    public function getConnection() {
        // If the connection is already established, return it
        if ($this->connection) {
            return $this->connection;
        } else {
            // If not connected, establish a new connection
            return $this->connect();
        }
    }

    // Method to close the database connection
    public function closeConnection() {
        if ($this->connection) {
            $this->connection->close();
        }
    }
}

// Usage example:
// Create an instance of Dbconnection and get the database connection
$dbConnection = new Dbconnection("localhost", "root", "", "krishibazar");
$connection = $dbConnection->getConnection();

// Use $connection for database operations
// For example: $connection->query("SELECT * FROM your_table");

// Don't forget to close the connection when done
$dbConnection->closeConnection();
?>
