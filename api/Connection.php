<?php
class Connection{

    private $banco = "tcc";
    private $host = "localhost";
    private $usuario = "root";
    private $senha= "";


    public function __construct($banco, $host, $usuario, $senha){
        $this->banco = $banco;
        $this->host = $host;
        $this->usuario = $usuario;
        $this->senha = $senha;

    }

    public function conexao(){
      
        $conn = new PDO("mysql:host={$this->host};dbname={$this->banco}","{$this->usuario}","{$this->senha}");
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        
        return $conn;
    }
}

	
?>