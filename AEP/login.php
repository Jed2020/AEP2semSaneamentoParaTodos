<?php include_once"config.php";?>

<html>
<body>
<?php

$email = $_POST['email'];
$entrar = $_POST['entrar'];
$senha = $_POST['senha'];

//$con = mysqli_connect("localhost", "root", "");


mysqli_select_db($conn, '$dbname');
  if (isset($entrar)) {

    $verifica = mysqli_query($conn, "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'") or die("erro ao selecionar");
      if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='pagina4.html';</script>";
        die();
      }else{
        echo "<script>alert('Login realizado com sucesso!'); 
    window.location = 'pagina6.html'; </script>";
      }
  }
?>
</body>
</html>