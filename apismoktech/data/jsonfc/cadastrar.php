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
include_once "../../objects/fornecedores.php";

//instancia da classe Database
$database = new Database();
$db = $database->getConnection();

$fornecedores = new Fornecedores($db);

$data = json_decode(file_get_contents("php://input"));



if(

    !empty($data->nomesocial) && 
    !empty($data->cnpj) &&
    !empty($data->razaosocial) &&
    !empty($data->cidade) &&
    !empty($data->cep) &&
    !empty($data->endereco) &&
    !empty($data->telefone) 

    )
    {
        
        $fornecedores->nomesocial = $data->nomesocial;
        $fornecedores->cnpj = $data->cnpj;
        $fornecedores->razaosocial = $data->razaosocial;
        $fornecedores->cidade = $data->cidade;
        $fornecedores->cep = $data->cep;
        $fornecedores->endereco = $data->endereco;
        $fornecedores->telefone = $data->telefone;
      


        if($fornecedores->cadastro()){
            header('HTTP/1.0 201');
            echo json_encode(array("mensagem"=>"Cadastro do Fornecedor realizado"));
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
