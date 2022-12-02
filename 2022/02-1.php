<?php
require_once("lib.inc.php");

$data = loadFile("02-1_input.txt");

$score = 0;

foreach($data AS $value) {
    list($opponent, $me) = explode(" ", trim($value));
    
    switch ($opponent) {
        case 'A':
            switch($me) {
                case 'X':
                    $score += 4;
                    break;

                case 'Y':
                    $score += 8;
                    break;

                case 'Z':
                    $score += 3;
                    break;

                default:
                    die("FATAL ERROR: NO PAIRING FOUND (".$value.": ".$opponent." / ".$me.")\n");
            }
            break;

        case 'B':
            switch($me) {
                case 'X':
                    $score += 1;
                    break;

                case 'Y':
                    $score += 5;
                    break;

                case 'Z':
                    $score += 9;
                    break;

                default:
                die("FATAL ERROR: NO PAIRING FOUND (".$value.": ".$opponent." / ".$me.")\n");
            }
            break;

        case 'C':
            switch($me) {
                case 'X':
                    $score += 7;
                    break;

                case 'Y':
                    $score += 2;
                    break;

                case 'Z':
                    $score += 6;
                    break;

                default:
                die("FATAL ERROR: NO PAIRING FOUND (".$value.": ".$opponent." / ".$me.")\n");
            }
            break;
        
        default:
            die("FATAL ERROR: VALUE NOT FOUND");
    }
}

echo $score;