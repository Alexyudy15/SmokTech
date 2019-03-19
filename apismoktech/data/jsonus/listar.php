<?php
//Vamos usar o formato de json para selecionar
//os dados vindos do banco de dados
//A requisição a essa página pode ser feita por 
//meio de vários protocolos diferentes:
    //-http ; https ; file ; ftp 
//precisamos permitir o acesso. Para isso vamos 
//usar cabeçalhos de permissão e controle
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

//Vamos importar as informações de conexão com o banco
//de dados por meio do comando include_one
include_once "../../config/database.php";

//Agora importaremos a classe usuário com suas funções
//de crud
include_once "../../objects/usuarios.php";

//instância da classe Database que possui as informações
//de conexão com o banco de dados
$database = new Database();
$db = $database->getConnection();

//Iniciando o objeto da classe usuarios
$usuario = new Usuarios($db);

//Chamando a função listar presente na classe usuario
$stmt = $usuario->listar();
//Contar a quantidade linhas que retornam da consulta
$num = $stmt->rowCount();
/*
Se a quantidade linhas for maior que 0(zero),então 
nos as exibiremos em tela no formato de json.
Caso contrário, será exibida uma mensagem de não 
localizado
*/
if($num > 0){
    //Organizar os dados em formato de array
    $usuario_arr = array();
    $usuario_arr["dados"]=array();

    while($linha = $stmt->fetch(PDO::FETCH_ASSOC)){
        //extrair o conteúdo que está retorando da 
        //linha e montar o array com todos os dados
        extract($linha);
        $array_item = array(
            "idusuario"=>$idusuario,
            "email"=>$email,
            "senha"=>$senha,
            "nome"=>$nome,
            "cpf"=>$cpf,
            "telefone"=>$telefone    
           );
        //Vamos colocar os dados retornado em uma lista
        //de array(que chamamos de dados) e preparar para
        //a saida
        array_push($usuario_arr["dados"],$array_item);

    }//Fim do laço while
    //responder com o codigo de status positivo(200)
    //header('HTTP/1.0 200');
    header('HTTP/1.0 200');
    //exibir os dados em formato de json
    echo json_encode($usuario_arr);
}
else{
    //responder que não foi encontrado com 
    // o status code 404 - not found
    //header('HTTP/1.0 404');
    header('HTTP/1.0 400');
    echo json_encode(array("mensagem"=>"Não foi possível localizar nenhum usuario"));
}

?>