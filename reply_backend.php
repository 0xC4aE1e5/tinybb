<?php
require "database.php";
$id = $_POST["id"];
$database["posts"][$id]["replies"][] = $_POST["reply"];
write_database($database);
header("Location: post.php?id=$id");
