<?php
require_once('../private_html/common.php');

header('Content-Type: text/html');
echo 'Blog Deleted';
var_dump($_POST);
if(isset($id))
    echo 'ID' . $_POST['id'];

// $id = $_POST['id'];

// if(isset($id)) {
//     $blog = new blog();

//     $blog->remove($id);

//     header('Content-Type: text/html');
//     echo 'Blog Deleted';
//     // http_utils::temporary_redirect_url('blogs.php');
    
// }
// else {
//     http_utils::temporary_redirect_url('blogs.php');
// }

?>