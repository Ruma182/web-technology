<?php

session_start();

$error = "";

if (isset($_POST["next"])) {

    $student_id = trim($_POST["student_id"]);
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $department = $_POST["department"];

    // Name validation
    if (!preg_match("/^[a-zA-Z ]+$/", $name)) {

        $error = "Name can contain only letters and spaces.";

    }

    // Email validation
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $error = "Please enter a valid email address.";

    }

    // Department validation
    elseif (empty($department)) {

        $error = "Please select a department.";

    }

    else {

        // Store student information in session
        $_SESSION["student_id"] = $student_id;
        $_SESSION["name"] = $name;
        $_SESSION["email"] = $email;
        $_SESSION["department"] = $department;

        // Create cookie if Remember Student ID is checked
        if (isset($_POST["remember"])) {

            setcookie(
                "student_id",
                $student_id,
                time() + (86400 * 30),
                "/"
            );

        }

        header("Location: academic_registration.php");
        exit();
    }
}

// Retrieve remembered Student ID from cookie
$remembered_id = "";

if (isset($_COOKIE["student_id"])) {

    $remembered_id = $_COOKIE["student_id"];

}

?>

<!DOCTYPE html>
<html>

<head>

    <title>University Portal Registration</title>

    <link rel="stylesheet" href="portal.css">

</head>

<body>

<div class="container">

    <h2>University Portal</h2>

    <h3>Student Registration</h3>

    <?php

    if (!empty($error)) {

        echo "<p class='error'>$error</p>";

    }

    ?>

    <form method="POST">

        <label>Student ID</label>

        <input
            type="text"
            name="student_id"
            value="<?php echo $remembered_id; ?>"
            placeholder="Enter Student ID"
            required
        >

        <label>Student Name</label>

        <input
            type="text"
            name="name"
            placeholder="Enter Full Name"
            required
        >

        <label>Email</label>

        <input
            type="email"
            name="email"
            placeholder="example@email.com"
            required
        >

        <label>Department</label>

        <select name="department" required>

            <option value="">Select Department</option>

            <option value="CSE">
                Computer Science and Engineering
            </option>

            <option value="EEE">
                Electrical and Electronic Engineering
            </option>

            <option value="BBA">
                Business Administration
            </option>

            <option value="English">
                English
            </option>

        </select>

        <label class="checkbox">

            <input
                type="checkbox"
                name="remember"
            >

            Remember Student ID

        </label>

        <button type="submit" name="next">
            Next
        </button>

    </form>

</div>

</body>

</html>