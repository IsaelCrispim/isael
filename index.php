<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estaciomanento</title>
    <style>
        .container {
            display: flex;
            flex-direction: row;
            gap: 16px;
        }
        .container div {
          background-color: #ccc;
          width: 50%;
          height:150px;
          border: 1px solid #000;
          border-radius: 16px;
          display: flex;
          justify-content: center;
          align-items: center;
          padding: 16px;
          
        }
    </style>
</head>
<body>
    <div class="container">
        <div>
          <form method="POST">
            <input type="text" name="placa">
            <input type="time" name="hora_ent">
            <button type="submit">Registrar Entrada</button>
          </form>
        </div>
        <div>
          <form method="POST">
            <input type="text" name="placa">
            <input type="time" name="hora_sai">
            <button type="submit">Registrar Saída</button>
          </form>
        </div>
    </div>   
</body>
</html>

<?php

$placa = $_POST['placa'];
$hora_ent = $_POST['hora_ent'];
$hora_sai = $_POST['hora_sai'];

if(file_exists(filename: $placa.".txt")){
  $abrirSai = fopen(filename: $placa.".txt", mode:'r');
  $entrada = fread(stream: $abrirSai, lenght: 1024);
  $horaEntrada = new DateTime(datetime: $entrada);
  $horaSaida = new DateTime(datetime: $hora_sai);
  
  $tempo =  $horaEntrada->diff(targetObject: $horaSaida);
  $horasParaMinutos = $tempo->format(formart: '%h')*60;
  $minutosTotais = $horasParaMinutos + $tempo->format(formart: '%i');

  echo "Horas estacionadas". $tempo->format(format: '%hh e %imin');"</P>";
  echo "Valor a ser pago:".($minutosTotais/60) * 4;"</P>";
  
  return;
}else {
  $arquivo = fopen($placa.".txt", 'w');
  fwrite( stream: $arquivo, data:$hora_ent);
  fclose( stream: $arquivo );
}



?>

