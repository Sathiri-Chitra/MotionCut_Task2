<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    
    if ($password !== $confirmPassword) 
    {
        echo "Passwords do not match.";
    } 
    else 
    {
        
        echo "Registration successful!<br>";
        echo "Name: $name<br>";
        echo "Email: $email<br>";
        echo "Username: $username<br>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Registration Form</h1>
        <form id="task-2" action="registration.php" method="post">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" placeholder="Sathiri CHitra" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="sathirichitra99@example.com" required>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Sathiri_Chitra" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>

            <input type="submit" value="Register">
        </form>
    </div>
</body>
</html>