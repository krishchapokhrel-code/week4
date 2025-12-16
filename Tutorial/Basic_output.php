<?php
echo "Name: Krishcha Pokhrel <br>";

echo "Today's Date: " . date("2025-12-15") . "<br>";

$hour = date("H");

if ($hour < 12) {
    echo "It is Morning";
} elseif ($hour < 18) {
    echo "It is Afternoon";
} else {
    echo "It is Evening";
}
?>
