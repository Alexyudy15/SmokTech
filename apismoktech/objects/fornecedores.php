<?php


class Fornecedores{

    public $idfornecedores;
    public $nomesocial;
    public $cnpj;
    public $razaosocial;
    public $cidade;
    public $cep;
    public $endereco;
    public $telefone;


    function __construct($db){
        $this->conn = $db;
    }


    public function listar(){
        $query = "select * from fornecedores";

        $stmt=$this->conn->prepare($query);

        $stmt->execute();

        return $stmt;

    }
    
    public function cadastro(){

        $query = "insert into fornecedores 
        set
        nomesocial=:ns,
        cnpj=:cj,
        razaosocial=:rs,
        cidade=:cd,
        cep=:cp,
        endereco=:ed,
        telefone=:tf";

        $stmt = $this->conn->prepare($query);
            
            
            $this->nomesocial= htmlspecialchars(strip_tags($this->nomesocial));
            $this->cnpj= htmlspecialchars(strip_tags($this->cnpj));
            $this->razaosocial= htmlspecialchars(strip_tags($this->razaosocial));
            $this->cidade= htmlspecialchars(strip_tags($this->cidade));
            $this->cep= htmlspecialchars(strip_tags($this->cep));
            $this->endereco= htmlspecialchars(strip_tags($this->endereco));
            $this->telefone= htmlspecialchars(strip_tags($this->telefone));

         
            $stmt->bindParam(":ns",$this->nomesocial);
            $stmt->bindParam(":cj",$this->cnpj);
            $stmt->bindParam(":rs",$this->razaosocial);
            $stmt->bindParam(":cd",$this->cidade);
            $stmt->bindParam(":cp",$this->cep);
            $stmt->bindParam(":ed",$this->endereco);
            $stmt->bindParam(":tf",$this->telefone);

        if($stmt->execute()){
                return true;
        }
        return false;
}


        //ATUALIZAR
public function atualizar(){


    $query = "update fornecedores set 
    
    nomesocial=:ns,
    cnpj=:cj,
    razaosocial=:rs,
    cidade=:cd,
    cep=:cp,
    endereco=:ed,
    telefone=:tf 
    where idfornecedores=:idfornecedores
    ";
$stmt = $this->conn->prepare($query);

$this->idfornecedores= htmlspecialchars(strip_tags($this->idfornecedores));
$this->nomesocial= htmlspecialchars(strip_tags($this->nomesocial));
$this->cnpj= htmlspecialchars(strip_tags($this->cnpj));
$this->razaosocial= htmlspecialchars(strip_tags($this->razaosocial));
$this->cidade= htmlspecialchars(strip_tags($this->cidade));
$this->cep= htmlspecialchars(strip_tags($this->cep));
$this->endereco= htmlspecialchars(strip_tags($this->endereco));
$this->telefone= htmlspecialchars(strip_tags($this->telefone));

$stmt->bindParam(":idfornecedores",$this->idfornecedores);
$stmt->bindParam(":ns",$this->nomesocial);
$stmt->bindParam(":cj",$this->cnpj);
$stmt->bindParam(":rs",$this->razaosocial);
$stmt->bindParam(":cd",$this->cidade);
$stmt->bindParam(":cp",$this->cep);
$stmt->bindParam(":ed",$this->endereco);
$stmt->bindParam(":tf",$this->telefone);




//Executar a consulta e verificar se cadastrou
if($stmt->execute()){
return true;
}
return false;
}


public function apagar(){
    $query = "delete from fornecedores where idfornecedores=?";

    $stmt = $this->conn->prepare($query);

    $this->idfornecedores=htmlspecialchars(strip_tags($this->idfornecedores));

    $stmt->bindParam(1,$this->idfornecedores);

    if($stmt->execute()){
        return true;
    }
    return false;
   }
}

?>