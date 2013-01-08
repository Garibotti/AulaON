<?php 
session_start("usuario");
unset($_SESSION["TipoUsuario"]);
unset($_SESSION["nome_usuario"]);
session_destroy("usuario");
header("location: ../");
?>