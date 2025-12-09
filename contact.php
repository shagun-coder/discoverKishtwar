<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $data = "Name: $name\nEmail: $email\nMessage: $message\n\n";

    file_put_contents("messages.txt", $data, FILE_APPEND);

    echo "Message saved successfully!";
}
?>