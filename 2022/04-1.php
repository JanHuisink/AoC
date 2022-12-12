<?php
require_once("lib.inc.php");

$data = loadFile("04-input.txt");

$count = 0;

foreach($data AS $row) {
    list($elf1, $elf2) = explode(",", $row);
    $elf1 = new Elf($elf1);
    $elf2 = new Elf($elf2);
    
    if(($elf1->begin <= $elf2->begin && $elf1->end >= $elf2->end) || ($elf1->begin >= $elf2->begin && $elf1->end <= $elf2->end)) {
        $count++;
    }
}

echo ($count);

class Elf {
    var $begin;
    var $end;

    function __construct($data) {
        $data = explode("-", $data);
        $this->begin = min($data);
        $this->end = max($data);
    }
}