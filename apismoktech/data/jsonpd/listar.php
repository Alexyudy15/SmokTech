<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once "../../config/database.php";
include_once "../../objects/pedidos.php";

$database = new Database();

$db = $database->getConnection();

$pedido = new Pedidos($db);

$stmt = $pedido->listar();

$num = $stmt->rowCount();

if($num > 0){
    $pedidos_arr = array();
    $pedidos_arr["dados"] = array();

    while($linha = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($linha);
        $array_item=array(
            "idpedido"=>$idpedido,
            "idusuario"=>$idusuario,
            "mesa"=>$mesa,
            "bistro"=>$bistro,
            "datapedido"=>$datapedido
        );
        array_push($pedidos_arr["dados"],$array_item);
    }

    //header('HTTP/1.0 200');
    header('HTTP/1.0 200');
    echo json_encode($pedidos_arr);
}
else{
    header('HTTP/1.0 404');
    echo json_encode(array("mensagem"=>"Não foi possível localizar nenhum pedido"));
}

?>