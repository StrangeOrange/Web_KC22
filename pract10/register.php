<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>Document</title>
</head>
<body>
<form class="form-3" action="db_reg.php" method="post">
    <p class="clearfix">
        <label for="login">Логин</label>
        <input type="text" name="login" id="login" placeholder="Логин">
    </p>
    <p class="clearfix">
        <label for="password">Пароль</label>
        <input type="password" name="password" id="password" placeholder="Пароль">
    </p>
    <p class="clearfix">
        <label for="first_name">Имя</label>
        <input type="text" name="first_name" id="first_name" placeholder="Имя">
    </p>
    <p class="clearfix">
        <label for="Last_name">Фамилия</label>
        <input type="text" name="Last_name" id="Last_name" placeholder="Фамилия">
    </p>
    <p class="clearfix">
        <input type="submit" name="submit" value="Регистрация">
    </p>
</form>
</body>
</html>