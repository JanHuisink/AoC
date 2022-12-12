<?php
require_once("lib.inc.php");

$data = loadFile("05-input.txt");

$run = false;

$stacks = [
    1 => ["N", "R", "J", "T", "Z", "B", "D", "F"],
    2 => ["H", "J", "N", "S", "R"],
    3 => ["Q", "F", "Z", "G", "J", "N", "R", "C"],
    4 => ["Q", "T", "T", "G", "N", "V", "F"],
    5 => ["F", "Q", "T", "L"],
    6 => ["N", "G", "R", "B", "Z", "W", "C", "Q"],
    7 => ["M", "H", "N", "S", "L", "C", "F"],
    8 => ["J", "T", "M", "Q", "N", "D"],
    9 => ["S", "G", "P"],
];

foreach($data AS $row) {
    $row = trim($row);
#    echo (print_r($run).":".$row."\n");
    if ($row == "") {
        $run = true;
        continue;
    }

    if ($run) {
        list($bla, $count, $bla, $from, $bla, $to) = explode(" ", $row);

        for ($i = 0; $i < $count; $i++) {
            $temp = array_shift($stacks[$from]);
            array_unshift($stacks[$to], $temp);
        }
    }
}

foreach($stacks AS $stack) {
    echo ($stack[0]);
}