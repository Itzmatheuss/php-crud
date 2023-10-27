<?php

$con = mysqli_connect("localhost","root"," ","banco_aluno");

if(!$con){
    die('Falha na conexão' .mysqli_connect_error());
}

?>