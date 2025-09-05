<?php
include('../conexao/conexao.php');


?>

<?php

$hostname = "localhost";
$bancodedados = "giga";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_errno) {
    echo "falha ao conectar: (" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$cursos = $_POST['cursos'];
$mensagem = $_POST['mensagem'];

echo "$nome<br>$email<br>$cursos<br>$mensagem";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ESTOU AQUI NO DADOS PHP</h1>
</body>
</html>