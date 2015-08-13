
<?php
if (isset($_GET["id"] )){
	//pega o codigo passado pelo link via GET
	$cod=$_GET["id"];
    include_once("conexao.php");

	$sql="DELETE FROM lista WHERE id=$cod";
	$res = mysql_query($sql) or die("ERRO ao Excluir da lista.".mysql_error());
}
  
header("Location:lista2.php");

?>

