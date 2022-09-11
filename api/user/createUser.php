<?php

require_once "../Connection.php";

$data = filter_var_array($_POST, FILTER_SANITIZE_STRIPPED);

if(in_array("",$data)){
    echo json_encode([
        "status" => 0,
        "message" => "Preencha todos os campos"
    ]);

    exit;
}

if($data['passwd'] != $data['confirm']){
    echo json_encode([
        "status" => 0,
        "message" => "Senhas diferentes"
    ]);

    exit;
}

$bd = new Connection("challenge","localhost","root","");

$sql = $bd->conexao();

$insert = $sql->prepare("insert into usuario(nome,email,senha) values(?, ?, ?)");

$insert->bindParam(1, $data['name']);
$insert->bindParam(2, $data['email']);
$insert->bindParam(3, $data['passwd']);

$result = $insert->execute();

if($result == true){
    echo json_encode([
        "status" => 1,
        "message" => "Usuário criado com sucesso"
    ]);
}
