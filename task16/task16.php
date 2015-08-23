<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
function pyramid()
{
  for($i = 1; $i <=20; $i++){
      for ($j = 1; $j < $i; $j++){
          echo "x " ;
      }
      echo "<br>";
  }
}

pyramid();
?>
</body>
</html>