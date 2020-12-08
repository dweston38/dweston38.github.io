<?php session_start();
if (!isset($_SESSION['logged'])) {
}
unset($_SESSION['logged']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Student Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <h3>Welcome, <?php echo $_SESSION['firstname']; ?> <?php echo $_SESSION['lastname']; ?></h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Student Home Page<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Register for classes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
            <span class="navbar-text">
                <h5>Student Dashboard</h5>
            </span>
        </div>
    </nav>





    <h4>Registered Classes</h4>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">Class ID#</th>
                <th scope="col">Subject</th>
                <th scope="col">Class Name</th>
                <th scope="col">Class Schedule</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">768DC</th>
                <td>CODE</td>
                <td>Intro to Coding</td>
                <td>Mon & Wed 9:30a - 11:00am</td>
            </tr>
            <tr>
                <th scope="row">908JC</th>
                <td>JAVA1</td>
                <td>Javascript 1</td>
                <td>Mon & Wed 12:30pm - 2:00pm</td>
            </tr>
            <tr>
                <th scope="row">984PH</th>
                <td>PHPI</td>
                <td>Intro to PHP</td>
                <td>Tue & Thurs 11:00am - 12:30pm</td>
            </tr>
        </tbody>
    </table>



</body>

</html>