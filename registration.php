<?php
$message = "";

// when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm = $_POST["confirm"];

    // validation
    if (empty($name) || empty($email) || empty($password) || empty($confirm)) {
        $message = "All fields are required!";

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Invalid email format!";
        
    } elseif ($password !== $confirm) {
        $message = "Passwords do not match!";
    } else {

        // Read existing data from users.json
        $data = json_decode(file_get_contents("users.json"), true);

        // Hash password
        $hashed = password_hash($password, PASSWORD_DEFAULT);

        // New user array
        $newUser = [
            "name" => $name,
            "email" => $email,
            "password" => $hashed,
        ];

        // Add new user to existing array
        $data[] = $newUser;

        // Write back to JSON file
        file_put_contents("users.json", json_encode($data, JSON_PRETTY_PRINT));

        $message = "Registration Successful!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body>

<h2>User Registration</h2>

<form method="POST">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="email" name="email"><br><br>
    Password: <input type="password" name="password"><br><br>
    Confirm Password: <input type="password" name="confirm"><br><br>
    <button type="submit">Register</button>
</form>

<p style="color:light green;">
    <?php echo $message; ?>
</p>

</body>
</html>

