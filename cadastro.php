<?php 

include 'banco.php';

$login = $_POST['login'];
$senha = MD5($_POST['senha']);
$connect = mysqli_connect($servername, $username, $password, $database);

$query_select = "SELECT login FROM usuario WHERE login = '$login'";
$select = mysqli_query($query_select,$connect);
$array = mysqli_fetch_array($select);
$logarray = $array['login'];

  if($login == "" || $login == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>";

    }else{
      if($logarray == $login){

        echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.html';</script>";
        die();

      }else{
        $query = "INSERT INTO usuario (login,senha) VALUES ('$login','$senha')";
        $insert = mysqli_query($connect, $query);
        
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";
        }
      }
    }
    
    echo "x";
        ?>