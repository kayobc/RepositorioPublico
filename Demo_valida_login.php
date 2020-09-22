<?php

include '../Demo_bd_connnection.php';

$conexaobd = AbreCon();
$user = $_POST['text_login'];
$senha = hash("sha256", $_POST['text_senha']);

if ($conexaobd -> connect_error) {
  die("Falha na conexao com o banco de dados:" .$conexaobd -> connect_error);
}

$verifica = mysqli_query($conexaobd, "SELECT * FROM USUARIO WHERE usuario = '$user' AND senha = '$senha'") or die("Login e/ou senha incorretos");

if (mysqli_num_rows($verifica)<=0){
  echo"<script language='javascript' type='text/javascript'> alert('JAMAIS acessará com login e/ou senha incorretos, peça desculpas e tente novamente'); window.location.href='../Demo_index.html';</script>";
  die();
  }
else {
	   echo"<script language='javascript' type='text/javascript'> alert('Bem vindo(a) ".$user."'); window.location.href='../Demo_success.html';</script>";
      }


FechaCon($conexaobd);

?>