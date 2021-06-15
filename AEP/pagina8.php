<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>SANEAMENTO PARA TODOS</title>
  <LINK rel="stylesheet" href="pagina2.css">
  </head>
  <body>
      <div id="cabecalho">
      <h1>SANEAMENTO PARA TODOS</h1>
      <div id="linha-horizontal"></div>
      <div id="link-paginas"> <a href="index.html">Sair</a> <a href="pagina6.html">Menu</a></div>  
      <div id="linha-horizontal"></div>
      <p>Resumo de Informações Residenciais</p>
      <?php
include_once"config.php";

echo "<table border=1>";
 echo "<tr>";
 echo "<th>BAIRRO</th>";
 echo "<th>RUA</th>";
 echo "<th>NUMERO</th>";
 echo "<th>SANEAMENTO EXISTENTE</th>";
 echo "<th>SANEAMENTO INEXISTENTE</th>";
 echo "</tr>";
 

$sql = "SELECT * FROM censo";
$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");


while ($registro = mysqli_fetch_array($resultado))
{
  $bairro = $registro['bairro'];
  $rua = $registro['rua'];
  $numero = $registro['numero'];
  $saneamentoExistente = $registro['saneamentoExistente'];
  $saneamentoInexistente = $registro['saneamentoInexistente'];

  echo "<tr>";
  echo "<td>".$bairro."</td>";
  echo "<td>".$rua."</td>";
  echo "<td>".$numero."</td>";
  echo "<td>".$saneamentoExistente."</td>";
  echo "<td>".$saneamentoInexistente."</td>";
  echo "</tr>";

}
mysqli_close($conn);
echo "</table>";
?>  


  </body>
  </html>
