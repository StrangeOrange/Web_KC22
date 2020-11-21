<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>Document</title>
</head>
<body>
<form class="form-3" action="auth.php" method="post">
    <p class="clearfix">
        <label for="login">Логин</label>
        <input type="text" name="login" id="login" placeholder="Логин">
    </p>
    <p class="clearfix">
        <label for="password">Пароль</label>
        <input type="password" name="password" id="password" placeholder="Пароль">
    </p>
    <p class="clearfix">
        <input type="submit" name="submit" value="Войти">
    </p>      
</form>
</body>
</html>