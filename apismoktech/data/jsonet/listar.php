<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once "../../config/database.php";
include_once "../../objects/estoques.php";

$database = new Database();

$db = $database->getConnection();

$estoque = new Estoque($db);

$stmt = $estoque->listar();

$num = $stmt->rowCount();

if($num > 0){
    $estoque_arr = array();
    $estoque_arr["dados"] = array();

    while($linha = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($linha);
        $array_item=array(
            "idestoque"=>$idestoque,
            "quantidade"=>$quantidade,
            "idproduto"=>$idproduto

        );

        array_push($estoque_arr["dados"],$array_item);

    }
    header('HTTP/1.0 200');
    echo json_encode($estoque_arr);
}
else{
    header('HTTP/1.0 404');
    echo json_encode(array("mensagem"=>"Não foi possível localizar o estoque"));
}


?>
