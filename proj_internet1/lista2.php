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
<div class="row" > 
    <div class="col-md-1"></div>
    <div class="col-md-10"><br>
<table class="table table-bordered">
       <thead>
            <tr class="success">
       
              <th>Id:</th>
              <th>Aluno:</th>
              <th>Matricula:</th>
              <th>Curso:</th>
              <th>Livro:</th>
              <th>Autor:</th>
              <th>Data do Emprestimo:</th>
              <th>Prazo:</th>
              <th>Opções:</th>
              </tr>
             </thead>
             <tbody>
<?php
include_once("conexao.php");
 
$sql = "SELECT * FROM lista";
$res = mysql_query($sql,$con);
 while ($reg = mysql_fetch_array($res)) {

?>


<tr>

<td> <?php echo $reg['id'];?></td>
<td> <?php echo $reg['aluno'];?></td>
<td> <?php echo $reg['matricula'];?></td>
<td> <?php echo $reg['curso'];?></td>
<td> <?php echo $reg['livro'];?></td>
<td> <?php echo $reg['autor'];?></td>
<td> <?php echo $reg['dt_emprestimo'];?></td>
<td> <?php echo $reg['dt_devolucao'];?></td>
<td> <a   class="btn btn-default" href="form_alterar.php?id=<?php echo $reg['id'];?>">Editar</a> <a class="btn btn-default" href="excluir.php?id=<?php echo $reg['id'];?>"> Excluir</a></td>

</tr>



<?php }       

mysql_close($con)?>



</tbody>
</table>

</div>
    <div class="col-md-1"></div>
  </div>
</body>
</html>