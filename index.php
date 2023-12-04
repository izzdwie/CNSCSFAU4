<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>CNSC SFAU</title>
   
</head>
<body>
<br>
<img src="asset/sfaulogo.png" class="mx-auto d-block"> 
<div style="text-align: center;">
<br>
    <h3> Camarines Norte State College: Scholarship Financial and Assistance Unit </h3>
    <br>
    <h5 ><i>"Make Education Accessible for All" </i></h5>
</div>
<div class="container mt-5 d-flex align-items-center justify-content-center">
    <div class="row">
        <div class="col-md-4">
            <button type="button" class="btn btn-primary btn-block" onclick="redirectTo('loginAdmin.php')">Admin</button>
        </div>
        <div class="col-md-4">
            <button type="button" class="btn btn-primary btn-block" onclick="redirectTo('login.php')">Grantees</button>
        </div>
        <div class="col-md-4">
            <button type="button" class="btn btn-primary btn-block" onclick="redirectTo('login.php')">Cashier</button>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    function redirectTo(url) {
        window.location.href = url;
    }
</script>

</body>
</html>
