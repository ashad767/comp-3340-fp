<?php
require_once('../private_html/common.php');

$user = $_POST['user'];
$pass = $_POST['pass'];

if(isset($user) && isset($pass)) {
    $db = new dbuser();

    $db->insert($user, $pass, 0);

    setcookie("user", $user, time() + $CFG->session_timeout, "/");
    http_utils::temporary_redirect_url('');
}
else {
    http_utils::temporary_redirect_url('');
}

?>