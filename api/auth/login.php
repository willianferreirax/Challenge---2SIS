<?php

require_once "../Connection.php";

ob_start();
session_start();

$data = filter_var_array($_POST, FILTER_SANITIZE_STRIPPED);

if(in_array("",$data)){
    echo json_encode([
        "message" => "Preencha todos os campos"
    ]);

    exit;
}

if(!$data['passwd']){
    echo json_encode([
        "message" => "Insira a senha"
    ]);

    exit;
}

if(!$data['email']){
    echo json_encode([
        "message" => "Insira o email"
    ]);

    exit;
}

$bd = new Connection("challenge","localhost","root","");

$sql = $bd->conexao();

$select = $sql->prepare("select * from desenvolvedor where email = ? and senha = ?");

$select->bindParam(1, $data['email']);
$select->bindParam(2, $data['passwd']);

$select->execute();

$result = $select->fetchAll();

if(count($result) == 1){
    echo json_encode(1);

    $_SESSION['dev'] = $result;

    exit;
}

$select = $sql->prepare("select * from usuario where email = ? and senha = ?");

$select->bindParam(1, $data['email']);
$select->bindParam(2, $data['passwd']);

$select->execute();

$result = $select->fetchAll();

if(count($result) == 1){
    echo json_encode(2);

    $_SESSION['user'] = $result;

    exit;
}

echo json_encode(0);