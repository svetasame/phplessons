<?php
print_r('Hello, world');
echo "\n";
//
//printSpiralArray(fillSpiralArray(6, 10));
//function fillSpiralArray($lines, $cols) {
//    $result = array_fill(0, $lines, array_fill(0, $cols, "+"));
//    $value = 1;
//    $top = 0;
//    $bottom = $lines - 1;
//    $left = 0;
//    $right = $cols - 1;
//    while ($value <= $lines * $cols) {
//        for ($i = $left; $i <= $right; $i++) {
//            $result[$top][$i] = '-';
//            $value++;
//        }
//        $top++;
//        for ($i = $top; $i <= $bottom; $i++) {
//            $result[$i][$right] = '-';
//            $value++;
//        }
//        $right--;
//        for ($i = $right; $i >= $left; $i--) {
//            $result[$bottom][$i] = '+';
//            $value++;
//        }
//        $bottom--;
//        for ($i = $bottom; $i >= $top; $i--) {
//            $result[$i][$left] = '+';
//            $value++;
//        }
//        $left++;
//    }
//    return $result;
//}
//
//function printSpiralArray($array) {
//    foreach ($array as $row) {
//        foreach ($row as $value) {
//            echo str_pad($value, 2, " ", STR_PAD_LEFT);
//        }
//        echo "\n";
//    }
//}


const constA = '+  ';
const constB = '-  ';

drawTile(15, 10);

function drawTile(int $width, int $height): void
{
    $out = '';


    for ($i = 1; $i <= $height; $i++) {
        if ($width>=$height){
            $timesA = round ( $i * $height/$width);
            $timesB = $height - $timesA;
        }
        else {
            $timesA = round ( $i * ($width/$height));
            $timesB = $width - $timesA;
        }



        $out .= str_repeat(constA, $timesA);
        $out .= str_repeat(constB, $timesB);
        $out .= "\n";
    }

    echo $out;
}



