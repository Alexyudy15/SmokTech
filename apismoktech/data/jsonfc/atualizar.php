<?php

#Vamos definir os cabeçalhos para receber as informações
#no formato de json de diversas origens

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type,Access-Control-Allow-Headers, Authorization,X-Requested-With");

//vamos importar a conexão com o banco de dados
include_once "../../config/database.php";


include_once "../../objects/fornecedores.php";

//instancia da classe Database
$database = new Database();
$db = $database->getConnection();


$fornecedores = new Fornecedores($db);

//Vamos pegar os dados postados(enviados)
$data = json_decode(file_get_contents("php://input"));


// echo json_encode($data);





$fornecedores->nomesocial = $data->nomesocial;
$fornecedores->cnpj = $data->cnpj;
$fornecedores->razaosocial = $data->razaosocial;
$fornecedores->cidade = $data->cidade;
$fornecedores->cep = $data->cep;
$fornecedores->endereco = $data->endereco;
$fornecedores->telefone = $data->telefone;
$fornecedores->idfornecedores = $data->idfornecedores;



    //vamos tentar executar o cadastro
    if($fornecedores->atualizar()){
        //iremos retornar ao internalta
        //a mensagem de cadastro realizado
        //e o codigo de status 201 de criado
        //header('HTTP/1.0 201');
        header('HTTP/1.0 200');
        echo json_encode(array("mensagem"=>"Atualização realizada"));

    }
    

    else{
        //header('HTTP/1.0 503');//erro interno do servidor
        header('HTTP/1.0 503');
        echo json_encode(array("mensagem"=>"Não foi possível atualizar"));
    }



?>