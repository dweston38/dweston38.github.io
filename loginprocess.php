<?php
session_start();

include 'db.connect.php';


$email = mysqli_real_escape_string($conn, $_POST['email']);


// encrypt the password 

$epassword = md5($_POST['password']);


// search the database for the email/password pair

$sql = "SELECT * FROM users WHERE email = '{$email}' AND encryptedpassword = '{$epassword}' ";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        // if found, set some SESSION Variables and send them to the Dashboard

        $_SESSION['logged'] = 'TRUE';
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['lastname'] = $row['lastname'];
        $_SESSION['email'] = $row['email'];
        header("Location: dashboard.php");
    }
} else {
    // if not found, redirect back to the login.php
    header("Location: login.php");
}
