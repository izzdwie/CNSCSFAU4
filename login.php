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
<img src="asset/sfaulogo.png" class="mx-auto d-block">
<div style="text-align: center;">
<h5 ><i>"Make Education Accessible for All" </i></h5>
</div>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Login to continue
                </div>
                <div class="card-body">
                    <?php
                    if (isset($_POST["login"])){
                        $email = $_POST["email"];
                        $password = $_POST["password"]; 
                        require_once("database.php");
                        $sql = "SELECT * FROM registration WHERE email = '$email'";
                        $result = mysqli_query($conn, $sql);
                        $registration = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        if ($registration){
                            if (password_verify($password, $registration["password"])) {
                                header("Location : welcomestud.php");
                                die();
                            }
                        }else{
                            echo "<div class='alert alert-danger'>Email does not match</div>";
                        }
                    }
                    ?>
                    <form action="login.php" method="post">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                        </div>
                        <button type="submit" value="login" name= "login" class="btn btn-primary mx-auto d-block"  style="text-align: center; " >Login</button>
                        <a href="signup.php" class="mx-auto d-block"><u>Sign up?</u></a>
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
