
<html>
<head>
  <title>Lista de Registro</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>  
	</head>
	<body>
	<nav role="navigation" class="navbar navbar-inverse" >
      <div class="navbar-header">
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">                    
                    <span class="sr-only">Navegação Responsiva</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
          <span class="icon-bar"></span>          
                </button>                
                <a href="index.php" class="navbar-brand">Novo Emprestimo</a>                
      </div>
            
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li ><a href="lista2.php">Consultar Lista</a></li>
                  </ul>
               
            </div>
  </nav> 		

<?php
include_once("conexao.php");


$aluno =$_POST['aluno'];
$matricula=$_POST['matricula'];
$curso=$_POST['curso'];
$livro=$_POST['livro'];
$autor=$_POST['autor'];
$dt_emprestimo=$_POST['dt_emprestimo'];
$dt_devolucao=$_POST['dt_devolucao'];
$sql=mysql_query("INSERT INTO lista(aluno,matricula,curso,livro,autor,dt_emprestimo,dt_devolucao) VALUES ('$aluno','$matricula', '$curso','$livro','$autor','$dt_emprestimo','$dt_devolucao')");
echo "Dados Gravados Com Sucesso!.";
   echo '<a href="lista2.php">Ver Lista</a>';
 mysql_close($con);

?>
</body>
</html> 