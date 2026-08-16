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

    <title>User Information</title>

    <link rel="stylesheet" href="register_style.css">

</head>

<body>

<div class="container">

    <h2>User Information</h2>

    <div class="info">

        <p>
            Full Name:
            <strong><?php echo $name; ?></strong>
        </p>

        <p>
            Email:
            <strong><?php echo $email; ?></strong>
        </p>

        <p>
            Username:
            <strong><?php echo $username; ?></strong>
        </p>

        <p>
            Phone Number:
            <strong><?php echo $phone; ?></strong>
        </p>

        <p>
            Gender:
            <strong><?php echo $gender; ?></strong>
        </p>

        <p>
            Date of Birth:
            <strong><?php echo $dob; ?></strong>
        </p>

        <p>
            Address:
            <strong><?php echo $address; ?></strong>
        </p>

    </div>

    <p>
        This information is retrieved from the PHP session.
    </p>

    <a href="profile.php">Back to Profile</a>

</div>

</body>

</html>