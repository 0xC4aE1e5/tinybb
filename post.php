<?php require "database.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viewing Post | <?php $forumName = $database["metadata"]["forumName"];
                            echo $forumName; ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1><?php echo $forumName; ?></h1>
    <h2><?php echo $database["posts"][$_GET["id"]]["title"]; ?></h2>
    <p><?php echo $database["posts"][$_GET["id"]]["content"]; ?></p>
    <hr>
    <?php
    foreach ($database["posts"][$_GET["id"]]["replies"] as $reply) {
        echo "<p>" . htmlspecialchars($reply) . "</p><hr>";
    }
    ?>
    <form action="reply_backend.php" method="post">
        <label for="reply">Reply:</label>
        <br>
        <textarea name="reply" id="reply" cols="30" rows="10"></textarea>
        <br>
        <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
        <input type="submit" value="Reply">
    </form>
</body>

</html>