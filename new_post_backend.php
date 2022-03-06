<?php
require "database.php";
$id = md5(random_bytes(5));
$database["posts"][$id] = array(
    "title" => $_POST["title"],
    "content" => $_POST["content"],
    "replies" => array()
);
write_database($database);
header("Location: post.php?id=$id");
