<?php
require_once('../private_html/common.php');

$uname = $_POST['uname'];
$pass = $_POST['pass'];

?>
<!DOCTYPE html>
<html>
<head><title>Some Stuff</title></head>
<body>
<h1>Login Data</h1>
<ul>
<li>Username: <?php echo $uname; ?></li>
<li>Password: <?php echo $pass; ?></li>
</ul>
</body>
</html>
