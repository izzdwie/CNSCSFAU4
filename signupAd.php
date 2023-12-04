<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
                    Sign Up
                </div>
                <div class="card-body">
                    <?php
                    if (isset($_POST["submit"])) {
                        $lastname = $_POST["lastname"];
                        $fname = $_POST["fname"];
                        $email = $_POST["email"];
                        $password = $_POST["password"];
                        $passwordRepeat= $_POST["repeat_password"];

                        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

                        $errors = array();

                        if (empty($lastname) OR empty($fname) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
                            array_push( $errors,"All fields are required");
                        }
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            array_push( $errors,"Email is not valid");
                        }
                        if (strlen($password)<8) {
                            array_push( $errors,"Password must be at least 8 characcters long");
                        }
                        if ($password!==$passwordRepeat){
                            array_push($errors,"Password does not match");
                        }
                        require_once "database.php";
                        $sql = "SELECT * FROM admin WHERE email = '$email'";
                        $result = mysqli_query($conn, $sql);
                        $rowCount = mysqli_num_rows($result);
                        if ($rowCount>0){
                            array_push($errors,"Email already exists!");
                        }
                        if (count($errors) > 0) {
                            foreach ($errors as $error) {
                                echo "<div class='alert alert-danger'>$error</div>";
                            }      
                        }else{
                           
                            $sql = "INSERT INTO admin (lastname, fname, email, password) VALUES (?, ?, ?, ?)";
                            $stmt =  mysqli_stmt_init($conn);
                            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
                            if ( $prepareStmt) {
                                mysqli_stmt_bind_param($stmt,"ssss",$lastname, $fname, $email, $passwordHash );
                                mysqli_stmt_execute($stmt);
                                echo "<div class='alert alert-success'>You are registered successfully.</div>";
                            }else{
                                die("Something went wrong.");
                            }
                        }


                    }   
                    ?>
                    <form action="signup.php" method="post">
                        <div class="form-group">
                            <label for="fname">First Name:</label>
                            <input type="text" class="form-control" id="fname" name="fname" required>
                        </div>
                        <div class="form-group">
                            <label for="lastname">Last Name:</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="repeat_password">Confirm Password:</label>
                            <input type="password" class="form-control" id="repeat_password" name="repeat_password" required>
                        </div>
                        <button type="submit" class="btn btn-primary mx-auto d-block" name="submit">Sign Up</button>
                        <a href="login.php" class="mx-auto d-block"><u>Log in</u></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
