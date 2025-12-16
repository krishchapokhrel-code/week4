<form method="post">
    Password: <input type="password" name="pass">
    <button>Check</button>
</form>

<?php
if ($_POST) {
    $pass = $_POST['pass'];

    if (strlen($pass) < 8)
        echo "Minimum 8 characters<br>";
    if (!preg_match('/[0-9]/', $pass))
        echo "Must include number<br>";
    if (!preg_match('/[^a-zA-Z0-9]/', $pass))
        echo "Must include special character<br>";
}
?>
