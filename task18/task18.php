<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>multiplication table</title>
    <link href="../task06/css06/task06css.css" rel="stylesheet">
</head>
<body>
<table style="width:100%">
    <caption>Table of rating</caption>
    <tr>
        <th>Firstname Lastname</th>
        <th>Rating level_1</th>
        <th>Rating level_2</th>
        <th>Rating level_3</th>
        <th>Rating level_4</th>
    </tr>
    <?php
    $array = array("Ostashevskaya", "Vain", "*****");

    foreach ($array as $i) {
        echo "<tr>";

        echo "<td>" . $i . "</td>";
        echo "<td>" . "______" . "</td>";
        echo "<td>" . "______" . "</td>";
        echo "<td>" . "______" . "</td>";
        echo "<td>" . "______" . "</td>";

        echo "</tr>";
    }
    ?>
</table>
</body>
</html>