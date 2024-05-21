<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>вход</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<form class="div" action="signin.php" method="post">
    <div class="dd">
    <p>Тут будет форма авторизации:</p>
    <p><label>Логин</label></p>
    <p><input type="text" class="logo" name="logo" placeholder="Введите логин"></p>
    <p><label>Kомментарий</label></p>
    <p><textarea rows="5" cols="33" class="comm" name="comment" placeholder="Введите комментарий "></textarea></p>
    <button type="submit" class="button">Войти</button>
    </div>
    <?php
    if (isset($_SESSION['message'])) {
        echo ' <p class="msg"> ' . $_SESSION['message'] . '</p>';
    }
    unset($_SESSION['message']);
    ?>
</form>

</body>
</html>



