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
      <p>Informações do Cadastro</p>
      <?php
include_once"config.php";

echo "<table border=1>";
 echo "<tr>";
 echo "<th>NOME</th>";
 echo "<th>CIDADE</th>";
 echo "<th>ESTADO</th>";
 echo "<th>TIPO DE ENTIDADE</th>";
 echo "<th>EMAIL</th>";
 echo "<th>DATA DE CADASTRO</th>";
 echo "</tr>";
 

$sql = "SELECT * FROM cadastro";
$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");


while ($registro = mysqli_fetch_array($resultado))
{
  $nome = $registro['nome'];
  $cidade = $registro['cidade'];
  $estado = $registro['estado'];
  $tipoEntidade = $registro['tipoEntidade'];
  $email = $registro['email'];
  $data = $registro['data'];

  echo "<tr>";
  echo "<td>".$nome."</td>";
  echo "<td>".$cidade."</td>";
  echo "<td>".$estado."</td>";
  echo "<td>".$tipoEntidade."</td>";
  echo "<td>".$email."</td>";
  echo "<td>".$data."</td>";
  echo "</tr>";

}
mysqli_close($conn);
echo "</table>";
?>  


  </body>
  </html>
