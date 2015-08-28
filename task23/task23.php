<?php
function pyramid()
{
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 0; $j < $i; $j++) {
            echo "xx";
        }
        echo "<br>";
    }
}

pyramid();