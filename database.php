<?php

$database = json_decode(file_get_contents('database.json'), true);
function write_database($db)
{
    file_put_contents('database.json', json_encode($db));
}
