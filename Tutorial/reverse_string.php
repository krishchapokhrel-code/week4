<form method="post">
    Enter a word: <input type="text" name="word">
    <button type="submit">Reverse</button>
</form>

<?php
if (isset($_POST['word'])) {
    $word = $_POST['word'];
    $reverse = "";

    for ($i = strlen($word) - 1; $i >= 0; $i--) {
        $reverse .= $word[$i];
    }

    echo "Reversed: $reverse";
}
?>
