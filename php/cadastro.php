<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset="UTF-8" />
<title>Untitled Document</title>
</head>
 
<body>
<?php 
//PREENCHA OS DADOS DE CONEX�O A SEGUIR:
 
$servername = "localhost";
$username = "study";
$password = "194979396959";
$dbname = "study";
 
 
// RECEBENDO OS DADOS PREENCHIDOS DO FORMUL�RIO !
$nome	= $_POST ["nome"];	//atribui��o do campo "nome" vindo do formul�rio para variavel	
$email	= $_POST ["email"];	//atribui��o do campo "email" vindo do formul�rio para variavel
$mensagem	= $_POST ["msg"];

//Gravando no banco de dados !

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO clientes (nome, email, mensagem)
VALUES ('$nome', '$email', '$mensagem')";

if ($conn->query($sql) === TRUE) {
    echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a aten�ao.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

 

?> 
</body>
</html>