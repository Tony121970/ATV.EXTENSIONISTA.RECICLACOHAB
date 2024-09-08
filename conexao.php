<?php

//INÍCIO DA CONEXÃO COM O BANCO DE DADOS UTILIZANDO PDO
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "projeto1";
$port = 3306;

try {
    //Conexão com a porta
    //$conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);

    //Conexão sem a porta
    $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
    //echo "Conexão com o banco de dados realizada com sucesso.";
} catch (PDOException $err) {
    echo "Erro: Conexão com o banco de dados não realizada com sucesso. Erro gerado" . $err->getMessage();

    //Fim da conexão com o banco de dados utilizando PDO
}    

?>