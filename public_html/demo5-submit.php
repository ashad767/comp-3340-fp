<?php
require_once('../private_html/common.php');

$text = $_POST['sometext'];

?>
<!DOCTYPE html>
<html>
<head><title>Some Stuff</title></head>
<body>
<h1>TextArea Data</h1>
<?php echo $text; ?>
</body>
</html>
