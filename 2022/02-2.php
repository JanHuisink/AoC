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
                    $score += 3;
                    break;

                case 'Y':
                    $score += 4;
                    break;

                case 'Z':
                    $score += 8;
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
                    $score += 2;
                    break;

                case 'Y':
                    $score += 6;
                    break;

                case 'Z':
                    $score += 7;
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