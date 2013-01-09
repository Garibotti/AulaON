<?php 
	if(!isset($_SESSION["nome_usuario"])){
		header("location: ../index.php?codigo=5");
	}
?>