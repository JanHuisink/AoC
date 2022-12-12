<?php
require_once("lib.inc.php");

$data = loadFile("04-input.txt");

$count = 0;

foreach($data AS $row) {
    list($elf1, $elf2) = explode(",", $row);
    $elf1 = new Elf($elf1);
    $elf2 = new Elf($elf2);

    if(count(array_intersect($elf1->range, $elf2->range)) > 0) {
        $count++;
    }
}

echo ($count);

class Elf {
    var $begin;
    var $end;
    var $range = [];

    function __construct($data) {
        $data = explode("-", $data);
        $this->begin = min($data);
        $this->end = max($data);

        $this->createRange();
    }

    function createRange() {
        for($i = $this->begin; $i <= $this->end; $i++) {
            $this->range[] = intval($i);
        }
    }
}