<?php
require_once('../private_html/common.php');

$title = $_POST['title'];
$content = $_POST['content'];

if(isset($title) && isset($content)) {
    $blog = new blog();

    $blog->insert($title, $content);

    http_utils::temporary_redirect_url('');
    
}
else {
    http_utils::temporary_redirect_url('');
}

?>