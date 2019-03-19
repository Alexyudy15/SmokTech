<?php

#Vamos definir os cabeçalhos para receber as informações
#no formato de json de diversas origens

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type,Access-Control-Allow-Headers, Authorization,X-Requested-With");

//vamos importar a conexão com o banco de dados
include_once "../../config/database.php";

//vamos importar a classe Produtos
include_once "../../objects/produtos.php";

//instancia da classe Database
$database = new Database();
$db = $database->getConnection();

$produto = new Produtos($db);

$data = json_decode(file_get_contents("php://input"));

if(
    !empty($data->nomeproduto) &&
    !empty($data->descricao) &&
    !empty($data->preco) && 
    !empty($data->img1) &&
    !empty($data->idfornecedores) 

    )
    {

        $produto->nomeproduto = $data->nomeproduto;
        $produto->descricao = $data->descricao;
        $produto->preco = $data->preco;
        $produto->img1 = $data->img1;
        $produto->idfornecedores = $data->idfornecedores;


        if($produto->cadastro()){
            header('HTTP/1.0 201');
            echo json_encode(array("mensagem"=>"Cadastro de produto realizado"));
        }
        else{
            header('HTTP/1.0 503');
            echo json_encode(array("mensagem"=>"Não foi possível cadastrar"));
        }
    }
    else{
        header('HTTP/1.0 400');
        echo json_encode(array("mensagem"=>"Preencha os dados"));
    }
    ?>
