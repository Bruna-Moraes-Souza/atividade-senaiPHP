<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <form action="Tabuada.php" method = post>
        <label> Numero:</label>
        <input type="txt" nome= "numero">
        <button type= "submit">Enviar</button>
    </form>
</body>
</html>
<?php
$numero =$_POST["numero"];
  for($i=1; $i <= 10; $i++){
    echo "$numero x $i=" . $numero*$i. "<br>"
  }