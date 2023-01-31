<?php
$hostname="localhost";
$user="root"; 
$password="";
$database="phplivros";
$con= mysqli_connect($hostname, $user, $password, $database);

if(!$con){

    echo "Falha na conexão com o Banco de Dados";
}


?>