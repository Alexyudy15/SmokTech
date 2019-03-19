<?php
/*
Essa classe realiza o CRUD na tabela pedidos de acordo com o que 
o usuário deseja fazer. Sendo:
    C -> Create(insert - inserir)
    R -> Read(Select - Selecionar)
    U -> Update(Atualizar)
    D -> Delete(Apagar)
*/
class Pedidos{

    public $idpedido;
    public $idusuario;
    public $mesa;
    public $bistro;
    public $datapedido;

    public function __construct($db){
        $this->conn = $db;
    }

    public function listar(){
        $query = "Select * from pedidos";

        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt;

    }

    public function cadastro(){
        $query = 
        "insert into pedidos set 
        
        idusuario=:us,
        mesa=:ms,
        bistro=:bt
        
        ";

        $stmt = $this->conn->prepare($query);

        $this->idusuario = htmlspecialchars(strip_tags($this->idusuario));
        $this->mesa = htmlspecialchars(strip_tags($this->mesa));
        $this->bistro = htmlspecialchars(strip_tags($this->bistro));
        

        
        $stmt->bindParam(":us",$this->idusuario);
        $stmt->bindParam(":ms",$this->mesa);
        $stmt->bindParam(":bt",$this->bistro);
        

        

        if($stmt->execute()){
            return true;
        }
        return false;
    }


    
public function apagar(){
    $query = "delete from pedidos where idpedido=?";

    $stmt = $this->conn->prepare($query);

    $this->idpedido=htmlspecialchars(strip_tags($this->idpedido));

    $stmt->bindParam(1,$this->idpedido);

    if($stmt->execute()){
        return true;
    }
    return false;
   }

    }


?>