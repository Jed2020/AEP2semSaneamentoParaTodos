<?php include_once"config.php";?>
<html>
<body>  

<?php

$nome = $_POST['nome'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$tipoentidade = $_POST['tipoentidade'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$data = $_POST['data'];

//$conn = mysqli_connect($servidor, $dbname, $dbusuario, $dbsenha);

mysqli_select_db($conn, '$dbname');
$sql = "INSERT INTO cadastro (nome, cidade, estado, tipoentidade, email, senha, data) 
VALUES ('$nome', '$cidade', '$estado', '$tipoentidade', '$email', '$senha', '$data')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Cadastro realizado com sucesso!'); 
    window.location = 'pagina3.html'; </script>";
}else{
    echo "Ocorreu um erro." . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>  
</body>
</html>