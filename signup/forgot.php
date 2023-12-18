<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Forgot Password</h2>
                <form id="forgotPasswordForm">
                    <div class="form-group">
                        <label for="password">New Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="confirmPassword">Confirm Password:</label>
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                    </div>
                    <div id="passwordCriteria" class="mb-2"></div>
                    <button type="submit" class="btn btn-primary">Reset Password</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>

    <script>
        // Function to validate password criteria
        function validatePassword(password) {
            const regex = /^(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,}$/;
            return regex.test(password);
        }

        // Function to handle form submission
        $('#forgotPasswordForm').submit(function(event) {
            event.preventDefault();

            const password = $('#password').val();
            const confirmPassword = $('#confirmPassword').val();

            if (password !== confirmPassword) {
                alert("Passwords do not match!");
            } else if (!validatePassword(password)) {
                $('#passwordCriteria').text("Password must have at least 8 characters with 1 uppercase letter, 1 number, and 1 special character.");
            } else {
                // Implement AJAX request to send data to the server for password reset
                alert("Password reset successful!");
                // Redirect or perform necessary actions after successful password reset
            }
        });
    </script>
</body>
</html>
