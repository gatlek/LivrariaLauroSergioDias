<?php
$Servername = "127.0.0.1";
$User = "root";
$Senha = "";
$Database = "banco";

$link = mysqli_connect($Servername, $User, $Senha, $Database);

if (mysqli_connect_error()) {
	printf("<br> Nao foi possivel conectar.");
	printf("<br> Erro: %s\n", mysqli_connect_error());
	exit();
}
    ?>