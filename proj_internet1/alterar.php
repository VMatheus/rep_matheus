<html>
<head>
	<title></title>

	  <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>


<?php
	$cod=$_POST['codigo'];
	$aluno =$_POST['aluno'];
	$matricula=$_POST['matricula'];
	$curso=$_POST['curso'];
	$livro=$_POST['livro'];
	$autor=$_POST['autor'];
	$dt_emprestimo=$_POST['dt_emprestimo'];
	$dt_devolucao=$_POST['dt_devolucao'];

	include_once("conexao.php");

	 

	 $sql = "UPDATE lista SET aluno='$aluno',matricula='$matricula',curso='$curso',livro='$livro', autor='$autor' , 
	 dt_emprestimo='$dt_emprestimo', dt_devolucao='$dt_devolucao'   WHERE id=$cod";
	 mysql_query($sql);
	 
	 		echo "Dados Alterados!";
		 echo '<a href="lista2.php">Voltar Lista</a>';
	

	mysql_close($con);
?>


</body>
</html>