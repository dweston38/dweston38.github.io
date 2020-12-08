<?php
session_start();

session_unset($_SESSION['logged']);
session_unset($_SESSION['firstName']);
session_unset($_SESSION['lastName']);
session_unset($_SESSION['email']);

session_destroy();

header('Location: login.php');
