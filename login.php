<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-xrRqg2GpF9WEEHcxUsbPIAyJ2UXA7u8a1nJmz9AtEz+MAd/sG2tQ8vaW8S2I0N2V" crossorigin="anonymous">
    <title>CNSC SFAU</title>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Login to continue
                </div>
                <div class="card-body">
                    <form action="login.php" method="post">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" style="text-align: center; " >Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById("password");
        var eyeIcon = document.getElementById("eye-icon");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            eyeIcon.innerHTML = '<i class="fas fa-eye-slash" aria-hidden="true" onclick="togglePasswordVisibility()"></i>';
        } else {
            passwordInput.type = "password";
            eyeIcon.innerHTML = '<i class="fas fa-eye" aria-hidden="true" onclick="togglePasswordVisibility()"></i>';
        }
    }
</script>

</body>
</html>
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // For simplicity, you can hardcode a username and password here
    $validUsername = "admin";
    $validPassword = "password123";

    // Check if the entered credentials are valid
    if ($username == $validUsername && $password == $validPassword) {
        // Redirect to a dashboard or home page on successful login
        header("Location: dashboard.php");
        exit();
    } else {
        // Display an error message if credentials are invalid
        echo "Invalid username or password";
    }
}
?>
