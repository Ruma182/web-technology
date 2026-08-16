<?php

session_start();

if (isset($_POST["register"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $phone = $_POST["phone"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $address = $_POST["address"];

    // Check password confirmation
    if ($password != $confirm_password) {

        $error = "Passwords do not match.";

    } else {

        // Store user information in session
        $_SESSION["name"] = $name;
        $_SESSION["email"] = $email;
        $_SESSION["username"] = $username;
        $_SESSION["phone"] = $phone;
        $_SESSION["gender"] = $gender;
        $_SESSION["dob"] = $dob;
        $_SESSION["address"] = $address;

        header("Location: profile.php");
        exit();
    }
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Registration Form</title>

    <link rel="stylesheet" href="register_style.css">

</head>

<body>

<div class="container">

    <h2>Registration Form</h2>

    <?php

    if (isset($error)) {
        echo "<p class='error'>$error</p>";
    }

    ?>

    <form method="POST">

        <label>Full Name</label>

        <input
            type="text"
            name="name"
            required
        >

        <label>Email</label>

        <input
            type="email"
            name="email"
            required
        >

        <label>Username</label>

        <input
            type="text"
            name="username"
            required
        >

        <label>Password</label>

        <input
            type="password"
            name="password"
            required
        >

        <label>Confirm Password</label>

        <input
            type="password"
            name="confirm_password"
            required
        >

        <label>Phone Number</label>

        <input
            type="text"
            name="phone"
            required
        >

        <label>Gender</label>

        <select name="gender" required>

            <option value="">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>

        </select>

        <label>Date of Birth</label>

        <input
            type="date"
            name="dob"
            required
        >

        <label>Address</label>

        <textarea
            name="address"
            rows="4"
            required
        ></textarea>

        <button type="submit" name="register">
            Register
        </button>

    </form>

</div>

</body>

</html>