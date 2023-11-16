<?php
print_r('Hello, world');


arrayTileFil(7,6);

function arrayTileFil (int $lines, int $columns) {
    $array_tile = array();
    for ($i = 0; $i < $columns; $i ++):
        echo "\n";
        for ($j = 0; $j < $lines; $j++):
            if ($i >= $j) {
                $array_tile[$i][$j] = "+";
            } else {
                $array_tile[$i][$j] = "-";
            }
            echo$array_tile[$i][$j] . '  ';
        endfor;
    endfor;
}
