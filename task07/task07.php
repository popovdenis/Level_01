<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
function foreachStr()
{
    $array = array('html', 'css', 'php', 'js', 'jq');
    return $array;
}

foreach (foreachStr() as $i) {
    echo $i . "<br>";
}
?>
</body>
</html>