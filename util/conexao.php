<?php 
    $hostname = "localhost";
    $usuario = "root";
    $senha = "";
    $db = "migueldb";
    $porta = "3306";
    $conexao = mysqli_connect($hostname,$usuario,$senha,$db,$porta);
    if(!$conexao){
        die("deu merda: " . mysqli_connect_error());
    }
    ?>