<?php

session_start();

if (!isset($_SESSION["student_id"])) {

    header("Location: student_registration.php");
    exit();

}

$student_id = $_SESSION["student_id"];
$name = $_SESSION["name"];
$email = $_SESSION["email"];
$department = $_SESSION["department"];

$semester = $_SESSION["semester"];
$course = $_SESSION["course"];
$credits = $_SESSION["credits"];

// Retrieve Student ID from cookie
if (isset($_COOKIE["student_id"])) {

    $cookie_student_id = $_COOKIE["student_id"];

} else {

    $cookie_student_id = "No cookie found";

}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Registration Summary</title>

    <link rel="stylesheet" href="portal.css">

</head>

<body>

<div class="container">

    <h2>Registration Summary</h2>

    <div class="info">

        <h3>Student Information</h3>

        <p>
            Student ID:
            <strong><?php echo $student_id; ?></strong>
        </p>

        <p>
            Name:
            <strong><?php echo $name; ?></strong>
        </p>

        <p>
            Email:
            <strong><?php echo $email; ?></strong>
        </p>

        <p>
            Department:
            <strong><?php echo $department; ?></strong>
        </p>

    </div>

    <div class="info">

        <h3>Academic Information</h3>

        <p>
            Semester:
            <strong><?php echo $semester; ?></strong>
        </p>

        <p>
            Course:
            <strong><?php echo $course; ?></strong>
        </p>

        <p>
            Credits:
            <strong><?php echo $credits; ?></strong>
        </p>

    </div>

    <div class="info">

        <h3>Cookie Information</h3>

        <p>
            Remembered Student ID:
            <strong><?php echo $cookie_student_id; ?></strong>
        </p>

        <p>
            This Student ID is retrieved from the
            <strong>browser cookie</strong>.
        </p>

    </div>

    <a href="complete_registration.php">
        Complete Registration
    </a>

</div>

</body>

</html><?php

session_start();

if (!isset($_SESSION["student_id"])) {

    header("Location: student_registration.php");
    exit();

}

$student_id = $_SESSION["student_id"];
$name = $_SESSION["name"];
$email = $_SESSION["email"];
$department = $_SESSION["department"];

$phone = $_SESSION["phone"];
$semester = $_SESSION["semester"];
$course = $_SESSION["course"];
$credits = $_SESSION["credits"];

// Retrieve Student ID from cookie
if (isset($_COOKIE["student_id"])) {

    $cookie_student_id = $_COOKIE["student_id"];

} else {

    $cookie_student_id = "No cookie found";

}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Registration Summary</title>

    <link rel="stylesheet" href="portal.css">

</head>

<body>

<div class="container">

    <h2>Registration Summary</h2>

    <p class="subtitle">
        Please review your information before completing registration.
    </p>

    <div class="info">

        <h3>Student Information</h3>

        <p>
            Student ID:
            <strong><?php echo $student_id; ?></strong>
        </p>

        <p>
            Name:
            <strong><?php echo $name; ?></strong>
        </p>

        <p>
            Email:
            <strong><?php echo $email; ?></strong>
        </p>

        <p>
            Department:
            <strong><?php echo $department; ?></strong>
        </p>

        <p>
            Phone:
            <strong><?php echo $phone; ?></strong>
        </p>

    </div>

    <div class="info">

        <h3>Academic Information</h3>

        <p>
            Semester:
            <strong><?php echo $semester; ?></strong>
        </p>

        <p>
            Course:
            <strong><?php echo $course; ?></strong>
        </p>

        <p>
            Credits:
            <strong><?php echo $credits; ?></strong>
        </p>

    </div>

    <div class="info">

        <h3>Cookie Information</h3>

        <p>
            Remembered Student ID:
            <strong><?php echo $cookie_student_id; ?></strong>
        </p>

        <p>
            This Student ID is retrieved from the
            <strong>browser cookie</strong>.
        </p>

    </div>

    <div class="button-group">

        <a href="academic_registration.php">
            Back
        </a>

        <a href="complete_registration.php">
            Complete Registration
        </a>

    </div>

</div>

</body>

</html>