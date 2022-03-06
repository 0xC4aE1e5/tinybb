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
    <h2>Create post</h2>
    <form action="new_post_backend.php" method="post">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title">
        <br>
        <label for="content">Content:</label>
        <br>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="Create post">
    </form>
</body>

</html>