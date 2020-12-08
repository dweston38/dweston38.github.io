<?php
session_start();

include 'db.connect.php';

$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);

// Check for previous registrations based on email


$sql = "SELECT email FROM users WHERE email = '{$email}' LIMIT 1";



$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        // if true, message already registered or redirect to reg page
        echo 'You are already registered.';
        header("Location: login.php");
    }
} else {
    // Generate a random password 

    $mypassword = rand();

    // Encrypt the password 

    $epassword = md5($mypassword);

    // Insert them into database 

    $sql = "INSERT INTO users (firstname, lastname, email, encryptedpassword)
VALUES ('{$firstname}','{$lastname}','{$email}','{$epassword}')";


    if (mysqli_query($conn, $sql)) {
        // send them an email or redirect them to a thank you page

        $_SESSION['firstname'] = $firstname;
        $_SESSION['lastname'] = $lastname;
        $_SESSION['email'] = $email;
        $_SESSION['mypassword'] = $mypassword;

        header("Location: welcomestudent.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
