<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Table</title>
    <link href="../task24/css/task24.css" rel="stylesheet">
</head>
<body>
<table>
    <caption>Table</caption>
    <?php
    $menu = array("header", "content", "footer");
    $array = array("Menu 1", "Menu 2", "Menu 3", "Menu 4", "Menu 5");
    $flag = true;
    for ($i = 0; $i < count($menu); $i++) {
        if ($menu[$i] == "content") {
            for ($j = 0; $j < count($array); $j++) {
                echo "<tr>";
                echo "<td>" . $array[$j] . "</td>";
                while ($flag) {
                    echo "<td class = 'fon'  rowspan='5'>" . strtoupper($menu[$i]) . "</td>";
                    echo "</tr>";
                    $flag = false;
                }
            }
            continue;
        }
        echo "<tr>";
        echo "<td colspan='2'>" . strtoupper($menu[$i]) . "</classtd>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>