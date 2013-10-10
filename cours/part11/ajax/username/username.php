<?php
session_start();
header('Content-Type: text/plain; charset=UTF-8');

if (isset($_POST['username'])) {
    echo $_POST['username'];
    $_SESSION['username'] = $_POST['username'];
}
?>