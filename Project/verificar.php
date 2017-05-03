<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<meta charset="utf-8"/>
<head>

<title>Untitled Document</title>
</head>

<body>

<?php 
//PREENCHA OS DADOS DE CONEX?O A SEGUIR:
 
$servername = "localhost";
$username = "study";
$password = "194979396959";
$dbname = "study";

 

// RECEBENDO OS DADOS PREENCHIDOS DO FORMUL?RIO !
$email	= isset($_POST ["email"])?;	
$senha	= $_POST ["senha"];	


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * from Clientes_Project where email='$email' and senha='$senha' LIMIT 1";
	
		
if ($conn->query($sql) == 0) {
    echo "Usuario não existe";
} else {
    
}

$conn->close();



    }			
			
		?>	
			
 

</body>
</html>
