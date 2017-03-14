<?php


?>


<!doctype HTML >
<head>
<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
<meta charset="utf8_decode"/>
<title>Login</title>
</head>
<body>
	<div id="formulario">
		<form action="consulta.php" method="POST" >
			<legend> Login</legend>
			
			<label>
				<span>E-mail</span>
				<input type="text" name="email"/>
            </label>
			
			<label>
				<span>Senha</span>
				<input type="password" name="senha"/>
            </label>
            
			<input type="hidden" name="acao" value="login"/>
			<input type="submit"  value="Entrar" class="btn"/>
			<a href="formulario.php">Cadastre-se Aqui</a>
</form>
<div style="clear:both;"></div>






</div>
</body>

