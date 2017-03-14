<html>
<head>
<script type="text/javascript">
function logado(){
	setTimeout("window.location='painel.php'",500);
	
}
function naologado(){
	setTimeout("window.location='login.php'",500);
	
}
</script>
</head>
<body>
<?php
include "conexao.inc";

$email = $_POST["email"];

$senha = $_POST["senha"];

$sel= "SELECT * FROM USUARIO WHERE email='$email' and senha='$senha'";
mysqli_query($con,$sel);

$reg=mysqli_affected_rows($con);

if($reg == 1){
	session_start();
	$_SESSION['email']=$email;
		
	echo "Logado com sucesso, aguarde um instante.";
	echo "<script>logado()</script>";
	
}else{
	echo "falha ao logar, Tente novamente.";
		echo "<script>naologado()</script>";
}

mysqli_close($con);


?>

</body>
</html>