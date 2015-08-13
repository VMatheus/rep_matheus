  <html>
  <head>
  	<title>Sistema Bibliotecario </title>
    <link href="css/bootstrap.css" rel="stylesheet">

  	<script src="js/jquery.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>  
  </head>
  <body >
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
  		<div class="col-md-3"></div>
  		<div class="col-md-6"><br>
        <h1>Emprestimo de Livros</h1>
  			<form name="form-1" method="POST" action="mantercadastro.php">
    				<div class="form-group">
    					<label >Aluno: </label>
      				<input type="text"class="form-control"  name="aluno">
   				</div>
    				<div class="form-group">
    					<label >Matricula: </label>
      				<input type="text"class="form-control"  name="matricula">
   				</div>
   				 <div class="form-group">
    					<label >Curso: </label>
      				<input type="text"class="form-control"  name="curso">
   				</div>
   				 <div class="form-group">
    					<label >Livro: </label>
      				<input type="text"class="form-control"  name="livro">
   				</div>
   				 <div class="form-group">
    					<label >Autor: </label>
      				<input type="text"class="form-control"  name="autor">
   				</div>
   				 <div class="form-group">
    					<label >Data do Emprestimo: </label>
      				<input type="text"class="form-control"  name="dt_emprestimo">
   				</div>
   				 <div class="form-group">
    					<label >Data de Devolução: </label>
      				<input type="text"class="form-control"  name="dt_devolucao">
   				</div>
  				<input type="submit" class="btn btn-default" value="Cadastrar">
  			</form>
  		</div>
  		<div class="col-md-3">
        <img src="img/photo.PNG" width="200" height="200">
      </div>
  	</div>
  </body>
  </html>