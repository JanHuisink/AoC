<?php
require_once("lib.inc.php");

$data = loadFile("06-input.txt");
$data = implode($data);

$offset = 0;

while(strlen(count_chars(substr($data, $offset, 14), 3)) < 14) {
    $offset++;
}

echo ($offset + 14);