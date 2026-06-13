<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>

<h2>Registration Form</h2>

<form action="save.php" method="POST">

    Full Name:<br>
    <input type="text" name="name" required><br><br>

    Email:<br>
    <input type="email" name="email" required><br><br>

    Gender:<br>
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female<br><br>

    Date of Birth:<br>
    <input type="date" name="dob"><br><br>

    Password:<br>
    <input type="password" name="password" required><br><br>

    <input type="submit" value="Submit">
    <input type="reset" value="Cancel">

</form>

</body>
</html>