<?php

function month($month)
{
       switch ($month) {
        case 1:
            echo $month . " January ";
            break;
        case 2:
            echo $month . " February ";
            break;
        case 3:
            echo $month . " March ";
            break;
        case 4:
            echo $month . " April ";
            break;
        case 5:
            echo $month . " May ";
            break;
        case 6:
            echo $month . " June ";
            break;
        case 7:
            echo $month . " July ";
            break;
        case 8:
            echo $month . " August ";
            break;
        case 9:
            echo $month . " September ";
            break;
        case 10:
            echo $month . " October ";
            break;
        case 11:
            echo $month . " November ";
            break;
        case 12:
            echo $month . " December ";
            break;
        default:
            echo "12 months of the year!!!";
            break;
    }
}
month(11);