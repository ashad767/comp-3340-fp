<?php
require_once('../private_html/common.php');

$blog = new blog();

$blogs = $blog->all_blogs();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <script src="js/delete-posts.js"></script>
</head>
<body>
    <?php

    foreach ($blogs as $blog) {
        $id = $blog['id'];
        $author = $blog['user'];
        $title = $blog['title'];
        $content = $blog['content'];

        ?>

        <h1><?= $title ?></h1>
        <?php
            if ($_COOKIE["user"] == $author){
                ?>
                    <button class="delete-post" id="<?= $id ?>">X</button>
                <?php
            }
        ?>
        <h4><?= $author ?></h4>
        <p><?= $content ?></p>
        

        <?php
    }

    ?>
</body>
</html>