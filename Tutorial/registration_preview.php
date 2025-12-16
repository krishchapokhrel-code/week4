<form method="post">
Name: <input name="name"><br>
Email: <input name="email"><br>
Password: <input type="password" name="pass"><br>
Confirm: <input type="password" name="cpass"><br>
<button>Submit</button>
</form>

<?php
if ($_POST && $_POST['pass'] == $_POST['cpass']) {
    echo "Preview:<br>";
    echo "Name: ".$_POST['name']."<br>";
    echo "Email: ".$_POST['email']."<br>";
    echo "Password Strength: Strong";
}
?>
