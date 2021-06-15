<?php include_once"config.php";?>
<html>
<body>  

<?php

$bairro = $_POST['bairro'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$saneamentoexistente = $_POST['saneamentoexistente'];
$saneamentoinexistente = $_POST['saneamentoinexistente'];

//$conn = mysqli_connect($servidor, $dbname, $dbusuario, $dbsenha);

mysqli_select_db($conn, '$dbname');
$sql = "INSERT INTO censo (bairro, rua, numero, saneamentoexistente, saneamentoinexistente) 
VALUES ('$bairro', '$rua', '$numero', '$saneamentoexistente', '$saneamentoinexistente')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Cadastro realizado com sucesso!'); 
    window.location = 'pagina5.html'; </script>";
}else{
    echo "Ocorreu um erro." . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>  
</body>
</html>