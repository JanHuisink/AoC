<?php
require_once("lib.inc.php");

$data = loadFile("03-1_input.txt");

$prioritySum = 0;

$i = 0;

foreach($data AS $row) {
    $backpack[$i++] = trim($row);

    if($i > 2) {
        $item = findDuplicate($backpack[0], $backpack[1], $backpack[2]);

        $priority = calculatePriority($item);
        $prioritySum += $priority;
        echo ($item . " : " . $priority. "( ".$backpack[0] . " // " . $backpack[1] . " // " . $backpack[2]." )\n");
        $i = 0;
    }
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

function findDuplicate($bp1, $bp2, $bp3) {
    $bp1 = str_split($bp1);
    sort($bp1);
    array_unique($bp1);
    $bp2 = str_split($bp2);
    sort($bp2);
    array_unique($bp2);
    $bp3 = str_split($bp3);
    sort($bp3);
    array_unique($bp3);

    for ($i = 0; $i < count($bp1); $i++) {
        if(in_array($bp1[$i], $bp2) && in_array($bp1[$i], $bp3)) {
            return $bp1[$i];
        }
    }
}