<?php
require_once('../private_html/common.php');

$page = new demo(pageid::PAGE2, new silly_output());
$page->generate();

?>
