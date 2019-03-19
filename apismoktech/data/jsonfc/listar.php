<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once "../../config/database.php";
include_once "../../objects/fornecedores.php";

$database = new Database();

$db = $database->getConnection();

$fornecedores = new Fornecedores($db);

$stmt = $fornecedores->listar();

$num = $stmt->rowCount();

if($num > 0){
    $fornecedores_arr = array();
    $fornecedores_arr["dados"] = array();

    while($linha = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($linha);
        $array_item=array(
            "idfornecedores"=>$idfornecedores,
            "nomesocial"=>$nomesocial,
            "cnpj"=>$cnpj,
            "razaosocial"=>$razaosocial,
            "cidade"=>$cidade,
            "cep"=>$cep,
            "endereco"=>$endereco,
            "telefone"=>$telefone

        );
        array_push($fornecedores_arr["dados"],$array_item);
    }

    //header('HTTP/1.0 200');
    header('HTTP/1.0 200');
    echo json_encode($fornecedores_arr);
}
else{
    header('HTTP/1.0 404');
    echo json_encode(array("mensagem"=>"Não foi possível localizar nenhum Fornecedor"));
}

?>