<?php
require_once('common.php');

// Clearly this is a very crude interface.
// A normal web site would never output raw text. Instead an admin login
// would trigger this and only would output errors if they occured.
try
{
//   echo "Destroying users DB...\n";
  $blog = new blog();
  $blog->admin_destroy_db();
  $db = new dbuser();
  $db->admin_destroy_db();
  setcookie("user", "", time() - 500);
//   echo "Finished destroying DB.\n";
}
catch (Exception $e)
{
    echo "EXCEPTION: ".$e->getMessage()."\n";
    echo "IP: ".http_utils::get_client_ip_address()."\n";
}
?>
