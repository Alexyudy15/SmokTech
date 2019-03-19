<?php
/*
    Vamos definir os cabeçalhos para receber as informaçõesno em formato de json
     de diversas origens.
*/
header("Access-Control-Allow-Origin: *");/*Permitindo acesso a api de diversas origens (FTP,HTTP,HTTPS,FILE e ETC)*/
header("Content-Type: application/json; charset=UTF-8");/*Mandaremos os dados em formato de jason e possibilitaremos palavras acentuadas*/
header("Access-Control-Allow-Methods: POST");/*Método Post(Postagem ou iserindo)*/
header("Access-Control-Max-Age: 3600");/*Tempo de espera Atenção!!! Qual o tempo ideal para espera???*/
header("Access-Control-Allow-Headers: Content-Type,Access-Control-Allow-Headers, Authorization,X-Requested-With");/*Atenção!!! Para que serve essa linha mesmo???*/

/* Vamos importar as informações de conexão presentes no arquivo(databaseleparfumdor.php) com o banco
de dados por meio do comando include_one*/
include_once "../../config/database.php";

/*Agora importaremos a classe Pagamentos presentes no arquivo(pagamentos.php) com suas funções de CRUD*/
include_once "../../objects/pagamentos.php";

/* Instância da classe Database que possui as informações de conexão com o banco de dados*/
$database = new Database();
$db = $database->getConnection();

/*Iniciando o objeto da classe Pagamentos*/
$pagamento = new Pagamentos($db);

/* Vamos pegar os dados postados(enviados)*/
$data = json_decode(file_get_contents("php://input"));

/*Vamos verificar se os dados mais importantes foram preenchidos*/
/*Início do 1º if(Principal)*/



if(
    
  
    !empty($data->idpedido) &&
    !empty($data->dinheiro) &&
    !empty($data->credito) &&
    !empty($data->debito) &&
    !empty($data->valor) &&
    !empty($data->parcelas) 
   
)
{
 
    $pagamento->idpedido = $data->idpedido;
    $pagamento->dinheiro = $data->dinheiro;
    $pagamento->credito = $data->credito;
    $pagamento->debito = $data->debito;
     $pagamento->valor = $data->valor;
    $pagamento->parcelas = $data->parcelas;

    /*Vamos tentar executar o cadastro*/
    /*Início do 1º if que está dentro do 1º if(Principal)*/
    if($pagamento->Cadastro()){
        header('HTTP/1.0 201');
        /*Se ocorreu tudo bem retornaremos a mensagem abaixo*/
        echo json_encode(array("mensagem"=>"Cadastro realizado"));
    }/*Fim do 1º if que está dentro do 1º if(Principal)*/

    /*Início do else que está dentro do 1º if(Principal)*/
    else{
        header('HTTP/1.0 503');
        /*Se ocorrer algum erro no cadastro retornaremos a mensagem abaixo*/
        echo json_encode(array("mensagem"=>"Não foi possível cadastrar"));
    }/*Fim do else que está dentro do 1º if(Principal)*/
}/*Fim do 1º if(Principal)*/
/*Início do else que está fora do 1º if(Principal)*/
else{
    header('HTTP/1.0 400');
    /*Se o usuário esquecer de preencher algum campo retornaremos a mensagem abaixo*/
    echo json_encode(array("mensagem"=>"Preencha os dados"));
}/*Fim do else que está fora do 1º if(Principal)*/
?>