<form method="post">
    Name: <input type="text" name="name"><br>
    Age: <input type="number" name="age"><br>
    Language: <input type="text" name="lang"><br>
    <button type="submit">Submit</button>
</form>

<?php
if ($_POST) {
    if ($_POST['name'] && $_POST['age'] && $_POST['lang']) {
        echo "Preview:<br>";
        echo "Name: ".$_POST['name']."<br>";
        echo "Age: ".$_POST['age']."<br>";
        echo "Language: ".$_POST['lang'];
    } else {
        echo "All fields required!";
    }
}
?>
