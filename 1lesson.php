<?php
print_r('Hello, world');


arrayTileFil(6,10);

function arrayTileFil (int $lines, int $columns) {
    if($lines==$columns) {
        arrayTileFilSquare($lines, $columns);
    }
    elseif ($lines>$columns){
        arrayTileFilLines ($lines, $columns);
    }
    else {
        arrayTileFilCols ($lines, $columns);
    }
}

function arrayTileFilCols (int $lines, int $columns) {
    $array_tile = array();
    $k = $columns;
    for ($i = 0; $i < $lines; $i++):
        echo "\n";
        if ($i < $lines / 2){
            for ($j = 0; $j < $columns; $j++):
            if ($j <= $i) {
                $array_tile[$i][$j] = "+";
            } else {
                $array_tile[$i][$j] = "-";
            }
            echo $array_tile[$i][$j] . '  ';
            endfor;
        }
        else {
            for ($j = 0;  $j < $columns; $j++):
                if ($j <= $k/2) {
                    $array_tile[$i][$j] = "+";
                } else {
                    $array_tile[$i][$j]= "-";
                    $k++;
                }
                echo $array_tile[$i][$j] . '  ';
            endfor;
            }
        endfor;
}

function arrayTileFilSquare (int $lines, int $columns) {
    $array_tile = array();
    for ($i = 0; $i < $lines; $i++):
        echo "\n";
        for ($j = 0; $j < $columns; $j++):
            if ($j <= $i) {
                $array_tile[$i][$j] = "+";
            } else {
                $array_tile[$i][$j] = "-";
            }
            echo $array_tile[$i][$j] . '  ';
        endfor;
    endfor;
}

function arrayTileFilLines (int $lines, int $columns) {
    $array_tile = array();
    $k = $columns;
    $l = $lines - $k/2;
    for ($i = 0; $i < $lines; $i++):
        echo "\n";
        if ($i < $columns / 2 ){
            for ($j = 0; $j < $columns; $j++):
                if ($j < $i) {
                    $array_tile[$i][$j] = "+";
                } else {
                    $array_tile[$i][$j] = "-";
                }
                echo $array_tile[$i][$j] . '  ';
            endfor;
            }
        elseif ($i >= $columns /2 && $i < $l){
            for ($j = 0;  $j < $columns; $j++):
                if ($j < $k/2) {
                    $array_tile[$i][$j] = "+";
                } else {
                    $array_tile[$i][$j]= "-";
                }
                echo $array_tile[$i][$j] . '  ';
            endfor;
        }
        else {
            for ($j = 0;  $j < $columns; $j++):
                if ($j <= $k/2) {
                    $array_tile[$i][$j] = "+";
                } else {
                    $array_tile[$i][$j] = "-";
                    $k++;
                }
                echo $array_tile[$i][$j] . '  ';
            endfor;
        }
    endfor;
}

