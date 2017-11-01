<?php 

include 'banco.php';
//--------------------------------------
$login = $_POST['login'];
$entrar = $_POST['entrar'];
$Senha = $_POST['senha'];
$connect = mysqli_connect($servername, $username, $password, $database);

         if (isset($entrar)){
$result = mysqli_query($connect,"SELECT * FROM usuario WHERE login = '$login'");
$result2 = mysqli_query($connect,"SELECT * FROM usuario WHERE senha = md5('$Senha')");
if((mysqli_num_rows($result) > 0) && (mysqli_num_rows($result2) > 0)){    
          header("Location: formulario.php");

}
elseif ((mysqli_num_rows($result) > 0 && mysqli_num_rows($result2)== 0) OR (mysqli_num_rows($result) == 0 &&mysqli_num_rows($result2)>0)) {
	echo "Nome de usuário ou senha incorretos";
}else{
 echo "Usuário não cadastrado";
}
       }
?>   