	<html>
	<head>
		<title>Alterar Emprestimo do Usuario</title>
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
	<div class="row" > 
	    <div class="col-md-2"></div>
	    <div class="col-md-6">



	<?php
	$cod =$_GET["id"];
	 include_once("conexao.php");

	 $sql="SELECT * FROM lista WHERE id =$cod";
	 $res =mysql_query($sql, $con) or die ("Erro ao pesquizar dados no banco!". mysql_error());

	if ($res){
	 while ($reg =mysql_fetch_assoc($res)){
	?>

	<h1>Dados</h1>

	<form  method="POST" name="form-4" action ="alterar.php">
			<input name="codigo"  class="form-control" type="hiden" readonly="readonly" value="<?php echo $reg['id'];?>">
			<div class="form-group">
				<label>Aluno:</label>
				<input type="text" class="form-control" name="aluno" value="<?php  echo $reg['aluno']; ?>">
			</div>
			<div class="form-group">
				<label>Matricula:</label>
				<input  type="text" name="matricula"  class="form-control" value="<?php  echo $reg['matricula']; ?>">
			</div>
			<div class="form-group">
				<label>Curso:</label>
				<input  type="text" name="curso" class="form-control" value="<?php  echo $reg['curso']; ?>">
			</div>
			<div class="form-group">
				<label>Livro:</label>
				<input  type="text" name="livro" class="form-control" value="<?php  echo $reg['livro']; ?>">
			</div>
			<div class="form-group">
				<label>Autor:</label>
				<input   type= "text" name="autor"  class="form-control" value="<?php  echo $reg['autor']; ?>">
			<div class="form-group">		
				<label>Data do Emprestimo:</label>
				<input type="text"name="dt_emprestimo"  class="form-control" value="<?php  echo $reg['dt_emprestimo']; ?>">
			</div>
			<div class="form-group">
				<label>Data de Devolução:</label>
				<input type="text" name="dt_devolucao"class="form-control" value="<?php  echo $reg['dt_devolucao']; ?>">

			</div>

			<input type="submit" class="btn btn-default" value="Salvar">

		</form>
	 	</div>
	  <div class="col-md-2"> </div>

	   
		</div>
	 
	<?php

		}

	}
	?>
	</body>
	</html>