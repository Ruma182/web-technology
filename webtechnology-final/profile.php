<?php

session_start();

if (!isset($_SESSION["username"])) {

    header("Location: registration.php");
    exit();

}

$name = $_SESSION["name"];
$email = $_SESSION["email"];
$username = $_SESSION["username"];
$phone = $_SESSION["phone"];
$gender = $_SESSION["gender"];
$dob = $_SESSION["dob"];
$address = $_SESSION["address"];

?>

<!DOCTYPE html>
<html>

<head>

    <title>User Profile</title>

    <link rel="stylesheet" href="register_style.css">

</head>

<body>

<div class="container">

    <h2>Registration Successful</h2>

    <div class="info">

        <p>
            Welcome,
            <strong><?php echo $name; ?></strong>
        </p>

        <p>
            Your registration was successful.
        </p>

        <p>
            Your information is stored in the
            <strong>PHP Session</strong>.
        </p>

    </div>

    <a href="user_info.php">View User Information</a>

    <a href="register_logout.php">Logout</a>

</div>

</body>

</html>