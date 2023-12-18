<?php
class SessionManager {
    public static function startSession() {
        session_start();
        return 0;
    }

    public static function isLoggedIn() {
        return isset($_SESSION['email']); // Adjust the session variable according to your setup
    }

    public static function redirectToLogin() {
        header("Location: login.php"); // Adjust the login page URL
        exit();
    }

    // Add other session-related methods as needed
}
?>
