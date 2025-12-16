<form method="post">
Username: <input name="user"><br>
Password: <input type="password" name="pass"><br>
<button>Login</button>
</form>

<?php
if ($_POST) {
    if ($_POST['user']=="admin" && $_POST['pass']=="1234@admin") {
        echo "Welcome Admin";
    } else {
        echo "Invalid credentials";
    }
}
?>
