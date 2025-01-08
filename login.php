<?php

$host = "localhost";
$user_name = "root";
$password = "";
$db_name = "primeira_aplicacao";

$conn = new mysqli($host, $user_name, $password, $db_name);

$instrucaoSQL = "Insert into users (email, password) values (?,?)";
$stmt = $conn->prepare($instrucaoSQL);
$stmt->bind_param("ss", $_POST["email"], $_POST["password"]);
if($stmt->execute()){
    echo "Login feito com sucesso!";
}else{
    echo "Falha no login!";
}





?>