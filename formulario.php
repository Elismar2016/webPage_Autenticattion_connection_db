<?php


?>


<!doctype HTML >
<head>
<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
<meta charset="utf8_decode"/>
<title>Cadastro de Usuarios</title>
</head>
<body>
	<div id="formulario">
		<form action="processa.php" method="POST" >
			<legend> Cadastre-se Aqui</legend>
			<label>
				<span>Nome</span>
				<input type="text" name="nome"/>
            </label>
			<label>
				<span>Foto</span>
				<input type="file" name="imagem" class="img"/>
            </label>
			<label>
				<span>E-mail</span>
				<input type="text" name="email"/>
            </label>
			<label>
				<span>Site(opicional)</span>
				<input type="text" name="site"/>
            </label>
			<label>
				<span>Senha</span>
				<input type="password" name="senha"/>
            </label>
            <label>
				<span>Descrição</span>
				<textarea  name="descricao" cols="30" rows="5">
				</textarea>
            </label>
			<input type="hidden" name="acao" value="cadastrar"/>
			<input type="submit"  value="cadastrar" class="btn"/>
</form>
<div style="clear:both;"></div>






</div>
</body>

