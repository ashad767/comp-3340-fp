<?php
require_once('../private_html/common.php');

if(isset($_COOKIE["user"])){
    http_utils::temporary_redirect_url('');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="/auth.php" method="POST">
        Username: <input type="text" name="user">
        Password: <input type="password" name="pass">
    <input type="submit" name="login" value="Login">
</body>
</html>