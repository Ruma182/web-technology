<?php

session_start();

if (isset($_POST["login"])) {

    $username = $_POST["username"];

    // Store username in session
    $_SESSION["username"] = $username;

    // Create cookie if Remember Me is checked
    if (isset($_POST["remember"])) {
        setcookie(
            "remember_user",
            $username,
            time() + (86400 * 30),
            "/"
        );
    }

    header("Location: dashboard2.php");
    exit();
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Session and Cookie Demo</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            min-height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 380px;
            background: white;

            padding: 40px;
            border-radius: 18px;

            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.25);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 28px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            color: #555;
            font-weight: bold;
            margin-bottom: 8px;
        }

        input[type="text"] {
            width: 100%;
            padding: 13px;

            border: 1px solid #ccc;
            border-radius: 8px;

            font-size: 15px;
            margin-bottom: 20px;

            outline: none;
        }

        input[type="text"]:focus {
            border-color: #667eea;
        }

        label:has(input[type="checkbox"]) {
            display: flex;
            align-items: center;
            gap: 8px;

            font-weight: normal;
            cursor: pointer;
            margin-bottom: 22px;
        }

        input[type="checkbox"] {
            width: 16px;
            height: 16px;
            cursor: pointer;
        }

        button {
            padding: 13px;

            border: none;
            border-radius: 8px;

            background: #667eea;
            color: white;

            font-size: 16px;
            font-weight: bold;

            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #5568d9;
            transform: translateY(-2px);
        }

    </style>

</head>

<body>

<div class="container">

    <h2>Login</h2>

    <form method="POST">

        <label>Username</label>

        <input
            type="text"
            name="username"
            placeholder="Enter your username"
            required
        >

        <label>
            <input
                type="checkbox"
                name="remember"
            >
            Remember Me
        </label>

        <button type="submit" name="login">
            Login
        </button>

    </form>

</div>

</body>

</html>