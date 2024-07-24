<?php
require_once('common.php');


?>
<!DOCTYPE html>
<html>
<head>
    <title>TinyMCE Demo</title>
    <script src="tinymce/tinymce.min.js" type="application/javascript"></script>
    <script type="application/javascript">
tinymce.init({
  selector: 'textarea#default-editor'
});
    </script>
</head>
<body>
<h1>TinyMCE Test</h1>
<form action="demo5-submit.php" method="POST">
Enter in some text: 
<textarea id="default-editor" name="sometext" rows="4" cols="25">blah blah</textarea>
<br>
<input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
