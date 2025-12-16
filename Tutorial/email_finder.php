<?php
$users = [
    ["email" => "ram@gmail.com"],
    ["email" => "sita@gmail.com"],
    ["email" => "hari@gmail.com"]
];

$newEmail = "ram@gmail.com";
$found = false;

foreach ($users as $user) {
    if ($user['email'] == $newEmail) {
        $found = true;
    }
}

echo $found ? "Email already exists" : "Email available";
?>
