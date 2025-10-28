<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
</head>
<body>
    <form action="Fatorial.php" method = post>
        <label> Numero para ser calculado:</label>
        <input type="txt" nome= "numero">
        <button type= "submit">Enviar</button>
    </form>
</body>
</html>
<?php
  $resultado =1;
  $numero = $_POST["numero"];
  for($i=1; $i <= $numero; $i++){
    $resultado *= $i;
}
  echo "$numero! = $resultado";