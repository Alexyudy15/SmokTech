<?php

class DetalhesPedido{

    public $iddetalhespedido;
    public $idpedido;
    public $idproduto;
    public $quantidade;

    public function __construct($db){
        $this->conn = $db;
    }

    public function listar(){

        $query = "select * from detalhespedido";

        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt;
    }

    public function cadastro(){
        $query = 
        "insert into detalhespedido set 
        idpedido=:ip,
         idproduto=:pr, 
         quantidade=:q
         ";

        $stmt = $this->conn->prepare($query);

       
        $this->idpedido = htmlspecialchars(strip_tags($this->idpedido));
        $this->idproduto = htmlspecialchars(strip_tags($this->idproduto));
        $this->quantidade = htmlspecialchars(strip_tags($this->quantidade));

       
        $stmt->bindParam(":ip",$this->idpedido);
        $stmt->bindParam(":pr",$this->idproduto);
        $stmt->bindParam(":q",$this->quantidade);

        if($stmt->execute()){
            return true;
        }
        return false;


    } 
    
    public function atualizar(){


        $query =  "update detalhespedido set  
        idpedido=:ip,
         idproduto=:pr, 
         quantidade=:q where 
         iddetalhespedido=:idd";
    $stmt = $this->conn->prepare($query);
    //Vamos usar uma função para retirar 
    //todos os caracteres especiais vindos de 
    //uma página html.
    //Isso fará com que você evite a execução
    //de comandos maliciosos no banco de dados
    //comandos de sqlinject
    $this->iddetalhespedido = htmlspecialchars(strip_tags($this->iddetalhespedido));
    $this->idpedido = htmlspecialchars(strip_tags($this->idpedido));
    $this->idproduto = htmlspecialchars(strip_tags($this->idproduto));
    $this->quantidade = htmlspecialchars(strip_tags($this->quantidade));
    
    //Vamos fazer um bindParam(ligção de parâmetros) entre os dados
    //enviados pelo usuario no navegado ou smartphone para o banco
    //de dados
    
    $stmt->bindParam(":idd",$this->iddetalhespedido);
    $stmt->bindParam(":ip",$this->idpedido);
    $stmt->bindParam(":pr",$this->idproduto);
    $stmt->bindParam(":q",$this->quantidade);
    
    
    //Executar a consulta e verificar se cadastrou
    if($stmt->execute()){
    return true;
    }
    return false;
    }
    public function apagar(){
        $query = "delete from detalhespedido where iddetalhespedido=?";
    
        $stmt = $this->conn->prepare($query);
    
        $this->iddetalhespedido=htmlspecialchars(strip_tags($this->iddetalhespedido));
    
        $stmt->bindParam(1,$this->iddetalhespedido);
    
        if($stmt->execute()){
            return true;
        }
        return false;
       }
}   



?>