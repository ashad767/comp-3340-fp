<?php
require_once('../private_html/common.php');

if(!isset($_COOKIE["user"])){
    http_utils::temporary_redirect_url('login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Blog</title>
</head>
<body>
    <form action="/db-create-blog.php" method="POST">
        Title: <input type="text" name="title">
        Content: <textarea name="content" rows="4" cols="50"></textarea>
    <input type="submit" name="login" value="Create blog">
</body>
</html>