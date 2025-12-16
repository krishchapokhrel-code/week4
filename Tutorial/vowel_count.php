<form method="post">
    Enter sentence: <input type="text" name="sentence">
    <button type="submit">Count</button>
</form>

<?php
if (isset($_POST['sentence'])) {
    $sentence = strtolower($_POST['sentence']);
    $count = 0;

    for ($i = 0; $i < strlen($sentence); $i++) {
        if (in_array($sentence[$i], ['a','e','i','o','u'])) {
            $count++;
        }
    }

    echo "Vowels count: $count";
}
?>
