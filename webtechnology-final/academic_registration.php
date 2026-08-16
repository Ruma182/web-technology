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

$error = "";

if (isset($_POST["submit_academic"])) {

    $semester = $_POST["semester"];
    $course = $_POST["course"];
    $credits = $_POST["credits"];
    $phone = trim($_POST["phone"]);

    // Phone number validation
    if (!preg_match("/^[0-9]{10,15}$/", $phone)) {

        $error = "Phone number must contain 10 to 15 digits.";

    }

    elseif (empty($semester)) {

        $error = "Please select your semester.";

    }

    elseif (empty($course)) {

        $error = "Please select a course.";

    }

    elseif (empty($credits)) {

        $error = "Please select credit information.";

    }

    else {

        // Store academic information in session
        $_SESSION["semester"] = $semester;
        $_SESSION["course"] = $course;
        $_SESSION["credits"] = $credits;
        $_SESSION["phone"] = $phone;

        header("Location: registration_summary.php");
        exit();

    }

}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Academic Registration</title>

    <link rel="stylesheet" href="portal.css">

</head>

<body>

<div class="container">

    <h2>Academic Registration</h2>

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

    <?php

    if (!empty($error)) {

        echo "<p class='error'>$error</p>";

    }

    ?>

    <form method="POST">

        <label>Phone Number</label>

        <input
            type="text"
            name="phone"
            placeholder="Enter phone number"
            required
        >

        <label>Semester</label>

        <select name="semester" required>

            <option value="">Select Semester</option>

            <option value="1st Semester">1st Semester</option>
            <option value="2nd Semester">2nd Semester</option>
            <option value="3rd Semester">3rd Semester</option>
            <option value="4th Semester">4th Semester</option>
            <option value="5th Semester">5th Semester</option>
            <option value="6th Semester">6th Semester</option>
            <option value="7th Semester">7th Semester</option>
            <option value="8th Semester">8th Semester</option>

        </select>

        <label>Course Selection</label>

        <select name="course" required>

            <option value="">Select Course</option>

            <option value="Web Technology">
                Web Technology
            </option>

            <option value="Database Systems">
                Database Systems
            </option>

            <option value="Artificial Intelligence">
                Artificial Intelligence
            </option>

            <option value="Computer Networks">
                Computer Networks
            </option>

            <option value="Software Engineering">
                Software Engineering
            </option>

        </select>

        <label>Credit Information</label>

        <select name="credits" required>

            <option value="">Select Credit</option>
            <option value="3 Credits">3 Credits</option>
            <option value="4 Credits">4 Credits</option>
            <option value="6 Credits">6 Credits</option>

        </select>

        <div class="button-group">

            <a href="student_registration.php">
                Back
            </a>

            <button type="submit" name="submit_academic">
                Continue
            </button>

        </div>

    </form>

</div>

</body>

</html>