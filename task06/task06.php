<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>multiplication table</title>
    <link href="css06/task06css.css" rel="stylesheet">
</head>
<body>
<?php
$cols = 9;
$rows = 8;
?>
<table>
    <caption>Multiplication table
        <?php echo " of " . $cols . " by " . $rows; ?>
    </caption>
    <?php
    for ($i = 1; $i <= $cols; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $rows; $j++) {
            echo "<td>", $i * $j, "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>