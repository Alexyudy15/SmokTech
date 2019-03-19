<?php

#Vamos definir os cabeçalhos para receber as informações
#no formato de json de diversas origens
#Access-Control-Allow-Orgin:*; Permite a requisição desta api por diversos
#protocolos(htpp; htps; file)

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type,Access-Control-Allow-Headers, Authorization,X-Requested-With");

//vamos importar a conexão com o banco de dados
include_once "../../config/database.php";

//vamos importar a classe Usuarios
include_once "../../objects/usuarios.php";

//instancia da classe Database
$database = new Database();
$db = $database->getConnection();

//instancia da classe Usuarios
$usuarios = new Usuarios($db);

//Vamos pegar os dados postados(enviados)
$data = json_decode(file_get_contents("php://input"));

//vamos verificar se os dados mais importantes
//foram preenchidos
if(
    !empty($data->email) && 
    !empty($data->senha)
){
    //Se os dados estão preenchidos, então
    //iremos passar para a api cadastrar
    // em banco
    $usuarios->email = $data->email;
    $usuarios->senha = $data->senha;
   
    //vamos tentar executar o login

    $usuarios->logar();

    /*
    Após ter feito o processo de login termos como retorno o objetooooooooooooo
    usuário inteiro. Assim podemos verificar se o idusuario é maior 
    que 0(zero).
    Se for maior que zero deverá retornar o status code 201-> criado,
    ou sej , logado. E támbém a mensagem "Logado"
    */


    if($usuarios->idusuario > 0){
        //iremos retornar ao internalta
        //a mensagem de Logado
        //e o codigo de status 201 de criado
        //header('HTTP/1.0 201');
        header('HTTP/1.0 201');
        echo json_encode($usuarios);
    }
    else{
        //header('HTTP/1.0 503');//erro interno do servidor
        header('HTTP/1.0 503');
        echo json_encode(array("mensagem"=>"Usuário ou senha incorretos"));
    }
}
else{
    //Mensagem para o usuário que os campos estão vazios
    //header('HTTP/1.0 400');//bad request
    header('HTTP/1.0 400');
    echo json_encode(array("mensagem"=>"Preencha os dados"));

}
?>