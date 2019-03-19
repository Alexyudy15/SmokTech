<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once "../../config/database.php";
include_once "../../objects/detalhespedido.php";

$database = new Database();

$db = $database->getConnection();

$detalhespedido = new DetalhesPedido($db);

$stmt = $detalhespedido->listar();

$num = $stmt->rowCount();

if($num > 0){
    $detalhespedido_arr = array();
    $detalhespedido_arr["dados"] = array();

    while($linha = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($linha);
        $array_item=array(
            "iddetalhespedido"=>$iddetalhespedido,
            "idpedido"=>$idpedido,
            "idproduto"=>$idproduto,
            "quantidade"=>$quantidade
        );
        array_push($detalhespedido_arr["dados"],$array_item);
    }

    //header('HTTP/1.0 200');
    header('HTTP/1.0 200');
    echo json_encode($detalhespedido_arr);
}
else{
    //header('HTTP/1.0 404');
    header('HTTP/1.0 404');
    echo json_encode(array("mensagem"=>"Não foi possível localizar os detalhes dos pedidos"));
}

?>