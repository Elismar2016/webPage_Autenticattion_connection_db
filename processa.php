<html>
<head>
<script type="text/javascript">
function logado(){
	setTimeout("window.location='painel.php'",500);
	
}
function naoLogado(){
	setTimeout("window.location='login.php'",500);
	
}
</script>
</head>
<body>
<?php
include "conexao.inc";




$nome = $_POST["nome"];
$imagem = $_POST["imagem"];
$email = $_POST["email"];
$site = $_POST["site"];
$senha = $_POST["senha"];
$descricao = $_POST["descricao"];
$ins= "INSERT INTO USUARIO VALUES(default,'$nome','$imagem','$email','$site','$senha','$descricao')";
mysqli_query($con,$ins);

$reg=mysqli_affected_rows($con);

if($reg == 1){
	session_start();
	$_SESSION['email']=$email;
	echo "<script>logado()</script>";
	echo "registros gravados com sucesso";
	
	
}else{
	echo "<script>naologado()</script>";
	echo "falha na gravação do registro";
	
}
$res=mysqli_query($con,"SELECT * FROM USUARIO");
$linhas = mysqli_num_rows($res);
echo "NUMERO DE INSCRITOS  [", $linhas ,"]"; 
mysqli_close($con);

?>

