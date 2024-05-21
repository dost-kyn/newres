<?php



session_start();
require_once 'connect.php';

$logo = $_POST['logo'];
$comment = $_POST['comment'];

$sql = "INSERT INTO `users` (`id`, `logo`, `comment`) VALUES (NULL, '$logo', '$comment')";

    mysqli_query($connect, $sql);
$_SESSION['message'] = 'Запись выложена';
header('Location: index.php');
