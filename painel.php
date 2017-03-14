<html>
<head>
<title>valor/significado</title>
	<script>
    function menuShow() {
	if(   document.getElementById("menu").style.display =="none")
        document.getElementById("menu").style.display ="block";
        else
        document.getElementById("menu").style.display ="none";   
    }
	function clicar(){
      alert("Atividade Web Design 1 Professor Rodrigo");
	 document.getElementById("menu").style.display = "block";
	 document.getElementById("menu").style.animationDuration = "3s";
	   		
	  }
	  
	 
	  </script>
   <link rel="stylesheet" type="text/css" href="css/estilo2.css" >
</head>
<body>
<?php
 session_start();
	$email=$_SESSION['email'];
		
	echo "Bem vindo ",$email;
	
session_destroy();
?>


       <div id="header" width="50%">
		 <a href="#"><div class="conteiner" onclick="menuShow();">
		<div class="menuIcon" title="MenuIcon" ></div>
        <div class="menuIcon" title="MenuIcon" ></div>
        <div class="menuIcon" title="MenuIcon" ></div></div></a>
		     <a href="#" title="home" onclick="clicar()">Home</a>
			 <a href="#" title="Contato" >Contato</a>
			 <a href="#" title="Produto" >Produto</a>
			 <div  id="menu" class="menu">
			 <ul id="nav">
	     	  <li><a href="#">Cadastro</a>
		            <ul>
		             <li><a href="cad_Cli.html">Cliente</a></li>
			         <li><a href="#">Produto</a></li>
                    </ul>
			  </li> 
  <li><a href="#">Vendas</a>
		            <ul>
		             <li><a href="#">a vista</a></li>
			         <li><a href="#">a prazo</a></li>
                    </ul>
			  </li> 			  
	    </ul>
</div>


		</div> 
		       <table>
		        <tr>
		          <td> 
		            <div id="valor">
		             <img src="porsche.jpg"style="width:700px;height:528px;"></img>
		            </div> 
				  </td>
		             <td align="center"><h1>Novo Porsche</h1><p>R$256.000</p></td>  </tr>
		         </table>
	<div id="footer" >Direitos reservados ao Elismar do 3 periodo de Sistemas para Internet do IFAC</div>  
  </body>
</html>