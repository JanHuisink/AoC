<?php
require_once("lib.inc.php");

$data = loadFile("06-input.txt");
$data = implode($data);

$offset = 0;

while(strlen(count_chars(substr($data, $offset, 4), 3)) < 4) {
    $offset++;
}

echo ($offset + 4);