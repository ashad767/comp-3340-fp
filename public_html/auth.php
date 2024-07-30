<?php
require_once('../private_html/common.php');

$user = $_POST['user'];
$pass = $_POST['pass'];

if(isset($user) && isset($pass)) {
    $db = new dbuser();

    if($db->check_user_pass($user, $pass) === FALSE) {
        echo 'Invalid credentials';
    }
    else{
        setcookie("user", $user, time() + $CFG->session_timeout, "/");
        http_utils::temporary_redirect_url('');
    }
}
else {
    http_utils::temporary_redirect_url('');
}

?>