<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once "../../config/database.php";
include_once "../../objects/pagamentos.php";

$database = new Database();

$db = $database->getConnection();

$pagamentos = new Pagamentos($db);

$stmt = $pagamentos->listar();

$num = $stmt->rowCount();

if($num > 0){
    $pagamentos_arr = array();
    $pagamentos_arr["dados"] = array();




    while($linha = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($linha);
        $array_item=array(
            "idpagamento"=>$idpagamento,
            "idpedido"=>$idpedido,
            "dinheiro"=>$dinheiro,
            "credito"=>$credito,
            "debito"=>$debito,
            "valor"=>$valor,
            "parcelas"=>$parcelas,
            "datapagamento"=>$datapagamento 
        );

        array_push($pagamentos_arr["dados"],$array_item);

    }
    header('HTTP/1.0 200');
    echo json_encode($pagamentos_arr);
}
else{
    header('HTTP/1.0 404');
    echo json_encode(array("mensagem"=>"Não foi possível localizar o pagamento"));
}


?>

API Rest

SOAP