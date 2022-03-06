<?php require "database.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $forumName = $database["metadata"]["forumName"];
            echo $forumName; ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1><?php echo $forumName; ?></h1>
    <h2>Posts</h2>
    <form action="new_post.php"><input type="submit" value="New Post"></form>
    <?php
    foreach (array_keys($database["posts"]) as $id) {
        echo "<a href='post.php?id=" . urlencode($id) . "'>" . $database["posts"][$id]["title"] . "</a><br>";
    }
    ?>
</body>

</html>