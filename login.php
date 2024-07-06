<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['uname'];
    $password = $_POST['psw'];

    if ($username == 'admin' && $password == 'admin') {
        echo "Login successful!";
    } else {
        echo "Invalid username or password.";
    }
}
?>
