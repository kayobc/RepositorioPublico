<?php

function AbreCon() {
	 
 $host = "10.0.3.45";
 $user = "root";
 $senha = "root";
 $bd = "Demo_DB";
 
 $conn = new mysqli($host, $user, $senha, $bd) or die("Falha ao conectar BD");
  
 return $conn;
 
 }
 
function FechaCon($conn) {
	 
 $conn -> close();
 
 }
   
?>