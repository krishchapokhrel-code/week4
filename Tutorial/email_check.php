<form method="post">
    Email: <input type="text" name="email">
    <button>Check</button>
</form>

<?php
if ($_POST) {
    $email = $_POST['email'];

    if (strpos($email, "@") > 0 && strpos($email, ".") !== false) {
        echo "Email looks OK";
    } else {
        echo "Email format incorrect (basic check)";
    }
}
?>
