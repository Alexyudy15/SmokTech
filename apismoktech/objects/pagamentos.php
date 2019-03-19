<?php


class Pagamentos{

    public $idpagamento;
    public $idpedido;
    public $dinheiro;
    public $credito;
    public $debito;
    public $valor;
    public $parcelas;
    public $datapagamento;


    function __construct($db){
        $this->conn = $db;
    }


    public function listar(){
        $query = "select * from pagamento";

        $stmt=$this->conn->prepare($query);

        $stmt->execute();

        return $stmt;

    }
    
    public function cadastro(){

        $query = "insert into pagamento 
        set
           
            idpedido=:ip,
            dinheiro=:di,
            credito=:ct;
            debito=:dt,
            valor=:vl,
            parcelas=:p";

        $stmt = $this->conn->prepare($query);
            
            $this->idpedido= htmlspecialchars(strip_tags($this->idpedido));
            $this->dinheiro= htmlspecialchars(strip_tags($this->dinheiro));
            $this->credito= htmlspecialchars(strip_tags($this->credito));
            $this->debito= htmlspecialchars(strip_tags($this->debito));
            $this->valor= htmlspecialchars(strip_tags($this->valor));
            $this->parcelas= htmlspecialchars(strip_tags($this->parcelas));
           

           
            $stmt->bindParam(":ip",$this->idpedido);
            $stmt->bindParam(":di",$this->dinheiro);
            $stmt->bindParam(":ct",$this->credito);
            $stmt->bindParam(":dt",$this->debito);
            $stmt->bindParam(":vl",$this->valor);
            $stmt->bindParam(":p",$this->parcelas);
            

        if($stmt->execute()){
                return true;
        }
        return false;

}
}

?>