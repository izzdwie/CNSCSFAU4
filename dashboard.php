<?php
// Replace this with your database connection logic
$servername = "your_database_server";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Replace this with your actual query to get user counts
$sql_female = "SELECT COUNT(*) AS female_count FROM users WHERE gender = 'Female'";
$sql_male = "SELECT COUNT(*) AS male_count FROM users WHERE gender = 'Male'";
$sql_total = "SELECT COUNT(*) AS total_count FROM users";

$result_female = $conn->query($sql_female);
$result_male = $conn->query($sql_male);
$result_total = $conn->query($sql_total);

$row_female = $result_female->fetch_assoc();
$row_male = $result_male->fetch_assoc();
$row_total = $result_total->fetch_assoc();

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>CNSC SFAU</title>
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Female Users</h5>
                    <p class="card-text"><?php echo $row_female['female_count']; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Male Users</h5>
                    <p class="card-text"><?php echo $row_male['male_count']; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Users</h5>
                    <p class="card-text"><?php echo $row_total['total_count']; ?></p>
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
