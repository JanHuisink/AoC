<?php
require_once("lib.inc.php");

$data = loadFile("01-1_input.txt");

$elf[0] = 0;
$elfid = 0;

foreach($data AS $value) {
    $value = trim($value);
    if($value == "") {
        $elf[++$elfid] = 0;
    } else {
        $elf[$elfid] += intval($value);
    }
}
rsort($elf);
array_splice($elf, 3);
echo (array_sum($elf));