<?php

session_start();

// Remove all session variables
session_unset();

// Destroy the session
session_destroy();

?>

<!DOCTYPE html>
<html>

<head>

    <title>Logout</title>

    <link rel="stylesheet" href="register_style.css">

</head>

<body>

<div class="container">

    <h2>Logout Successful</h2>

    <p>
        The registration session has been destroyed.
    </p>

    <a href="registration.php">Go to Registration</a>

</div>

</body>

</html>