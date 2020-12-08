<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you email</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="alert alert-success" role="alert">
            <div class="row justify-content-md-center">
                <h3>Congratulations! You are now registered <?php echo $_SESSION['firstname']; ?></h3>
            </div>
        </div>
        <p>
            <h4>You are now registered with the site. Please login to select your classes.</h4>
            <br><br>
            <div class="alert alert-warning" role="alert">
                Login Information: Please write down your password, it is <b>not</b> emailed to you:<br>
            </div>
            <h6><b>Username</b> = <?php echo $_SESSION['email']; ?></h6>
            <h6><b>Password</b> = <?php echo $_SESSION['mypassword']; ?></h6>
            <br><br>

            <button type="submit" class="btn btn-link"><a href="login.php">Login</a></button>

        </p>
    </div>
</body>

</html>