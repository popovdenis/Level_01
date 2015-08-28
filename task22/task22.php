<?php
$n = 1000;
$count = 0;
while ($n > 50) {
    $n = $n / 2;
    $count++;
}
echo $n . " ; " . $count;
