<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once "../../config/database.php";
include_once "../../objects/produtos.php";

$database = new Database();

$db = $database->getConnection();

$produtos = new Produtos($db);

$stmt = $produtos->listar();

$num = $stmt->rowCount();

if($num > 0){
    $produtos_arr = array();
    $produtos_arr["dados"] = array();

    while($linha = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($linha);
        $array_item=array(
            "idproduto"=>$idproduto,
            "nomeproduto"=>$nomeproduto,
            "descricao"=>$descricao,
            "preco"=>$preco,
            "img1"=>$img1,
            "idfornecedores"=>$idfornecedores
        );

        array_push($produtos_arr['dados'],$array_item);

    }
    header('HTTP/1.0 200');
    echo json_encode($produtos_arr);
}
else{
    header('HTTP/1.0 404');
    echo json_encode(array("mensagem"=>"Não foi possível localizar o produto"));
}


?>
