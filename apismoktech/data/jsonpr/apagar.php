<?php

#Vamos definir os cabeçalhos para receber as informações
#no formato de json de diversas origens

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type,Access-Control-Allow-Headers, Authorization,X-Requested-With");

//vamos importar a conexão com o banco de dados
include_once "../../config/database.php";

//vamos importar a classe Usuarios
include_once "../../objects/produtos.php";

//instancia da classe Database
$database = new Database();
$db = $database->getConnection();

//instancia da classe Usuarios
$produtos = new Produtos($db);

//Vamos pegar os dados postados(enviados)
$data = json_decode(file_get_contents("php://input"));

$produtos->idproduto = $data->idproduto;


    //vamos tentar executar o cadastro
    if($produtos->apagar()){
        //iremos retornar ao internalta
        //a mensagem de cadastro realizado
        //e o codigo de status 201 de criado
        //header('HTTP/1.0 201');
        header('HTTP/1.0 200');
        echo json_encode(array("mensagem"=>"Produto Apagado com sucesso"));

    }
    else{
        //header('HTTP/1.0 503');//erro interno do servidor
        header('HTTP/1.0 503');
        echo json_encode(array("mensagem"=>"Não foi possível apagar o produto"));
    }

?>

