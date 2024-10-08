<?php

function printProgress($progress, $label = '', $barChar = '█', $emptyChar = '-')
{
    $barLength = 50;
    $numChars = (int) ($progress / 100 * $barLength);
    $bar = str_repeat($barChar, $numChars) . str_repeat($emptyChar, $barLength - $numChars);
    $percentage = sprintf('%3d', $progress);

    echo "\r[$label{$bar}] {$percentage}%";
    if ($progress == 100) {
        echo PHP_EOL;
    }
}

// Contoh penggunaan:
// for ($i = 0; $i <= 100; $i++) {
//     usleep(100000); // Delay untuk mensimulasikan proses
//     printProgress($i);
// }
