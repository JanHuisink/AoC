<?php
require_once("lib.inc.php");

$data = loadFile("03-1_input.txt");

$prioritySum = 0;

foreach($data AS $row) {
    $row = trim($row);
    $backpack1 = substr($row, 0, strlen($row) / 2);
    $backpack2 = substr($row, strlen($row) / 2 * -1);

    $item = findDuplicate($backpack1, $backpack2);

    $priority = calculatePriority($item);
    $prioritySum += $priority;

}

echo ($prioritySum);

function calculatePriority($item) {
    $priority = ord($item);
    if($priority > 96) {
        $priority = $priority - 96;
    } else {
        $priority = $priority - 64 + 26;
    }

    return $priority;
}

function findDuplicate($bp1, $bp2) {
    for($i = 0; $i < strlen($bp1); $i++) {
        if(str_contains($bp2, substr($bp1, $i, 1))) {
            return substr($bp1, $i, 1);
        }
    }
}