<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset="UTF-8" />
	<meta charset="utf-8"/>
	
	<link rel="stylesheet" type="text/css" href="css/index.css"/>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<title>.:Estude para Sempre teste:.</title>
	


</head>
 
<body>

<?php 
//PREENCHA OS DADOS DE CONEX�O A SEGUIR:
 
$servername = "localhost";
$username = "study";
$password = "194979396959";
$dbname = "study";
 
 
// RECEBENDO OS DADOS PREENCHIDOS DO FORMUL�RIO !
$nome	= isset($_POST ["nome"])?;	//atribui��o do campo "nome" vindo do formul�rio para variavel	
$email	= $_POST ["email"];	//atribui��o do campo "email" vindo do formul�rio para variavel
$mensagem	= $_POST ["msg"];

?>

			<div class="bannercima">
			<header> 
			<img src="imagens/feature-bg.jpg" class="img-responsive center-block"  alt="Responsive image" width="100%" height="490">
			</div>
			<div id="texto"></div>
			</header>
			</div>
			
				<nav>
				<div class="topnav">

		<h1>Menu Principal</h1>
		<ul>	
		<li><a href="index.html" class="nounderline">Home</a></li>
		<li><a href="tutoriais.html" class="nounderline">Tutoriais</a></li>
		<li><a href="localizacao.html" class="nounderline">Localizacao</a> </li>
		<li><a href="fale_conosco.html" class="nounderline">Fale conosco</a> </li>
		</ul>
		</div>
		</nav>
		
		
		<section>
			<div class="corpo">
			<h1 id="titulohome"></h1>
			<p><?php
			
function post_captcha($user_response) {
        $fields_string = '';
        $fields = array(
            'secret' => '6LegnRQUAAAAAAUZ3CYYrUp85XsJZrRVaXT7yhet',
            'response' => $user_response
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }

    // Call the function post_captcha
    $res = post_captcha($_POST['g-recaptcha-response']);

    if (!$res['success']) {
        // What happens when the CAPTCHA wasn't checked
        echo '<p>Por favor, volte e marque a caixa do CAPTCHA.Obrigado.</p><br>';
		
		echo "<a href='fale_conosco.html' style='font-size:20px'>Voltar</a>";
		
		
		
		
		
    } else {

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO clientes (nome, email, mensagem)
VALUES ('$nome', '$email', '$mensagem')";

if ($conn->query($sql) === TRUE) {
    echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atencao.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


        // Paste mail function or whatever else you want to happen here!
        echo '<br><p>CAPTCHA completado com sucesso!</p><br>';
    }			
			
		?>	
			
 </p>
			</div>
		</section>	
		
		
		<br/>
		<aside>
		<div class="lateral">
				</aside>
		</div>

	</br>
	</br>
	</br>
	

		
		<div class="footer" align="center">
			<p>Copyright &copy; 2017 - by Cristian Freitas<br>
			<a href="https://www.facebook.com/cristian.tavares.250" target="_blank">Facebook</a> | <a href="http://youtube.com.br" target="_blank">Twitter</a></p>
		 </div>
		

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>



</body>
</html>