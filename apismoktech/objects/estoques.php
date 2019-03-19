<?php
/*
Esta classe guarda as informações sobre os usuários:
        - Suas propriedades e métodos do CRUD
        C - Create(Insert)
        R - Retriver|Read(Selects)
        U - Updates(Atualizações)
        D - Delete(Apagar dados)
*/
class Estoque{
    //Abaixo são apresentados os atributos da 
    //classe usuarios. Veja que eles refletem
    //os campos da tabela usuarios do banco
    //de dados
    public $idestoque;
    public $quantidade;
    public $idproduto;


//Abaixo é apresentado o construtor da classe 
//usuarios. Ele responsável por iniciar a classe
//Em php usamos o termo __construct para declarar
//um construtor
public function __construct($db){
    $this->conn = $db;
}

/*
Vamos criar o primeiro elementos relacionado ao 
crud para a classe usuarios. 
Listaremos os usuários cadastrados.
*/
public function listar(){
    //vamos criar uma variável para guardar 
    //a string da consulta do sql
    $query = "Select * from estoque";

    //Preparar a execução da consulta
    //A variável stmt(Statement(contexto)) irá guardar
    //o resultado da execução da consulta
    $stmt = $this->conn->prepare($query);

    //Vamos executar efetivamente a consulta
    $stmt->execute();

    //retornar os dados que foram selecionados
    return $stmt;
}


//-----Retornar os dados do usuario por id
public function listarPorId(){
    $query = "select * from estoque where idestoque=?";

    //preparando a consulta para a execução
    $stmt=$this->conn->prepare($query);

    //Vamos fazer um bind(ligação) do id pesquisado
    // com o parâmetro da consulta, neste caso é o 
    //ponto de interrogação
    $stmt->bindParam(1,$this->idestoque);

    //Executar efetivamente a consulta
    $stmt->execute();

    //Organizar os dados retornados da consulta para
    //a exibição em formato json
    //Vamos usar uma variável e um array para associar
    //os campos da tabela
    $linha = $stmt->fetch(PDO::FETCH_ASSOC);

    //Organizar no objeto usuario(arquivo usuarios.php)
    // os dados retornados
    //da tabela usuarios que está no banco de dados.
    $this->idestoque = $linha['idestoque'];
    $this->quantidade = $linha['quantidade'];
    $this->idproduto = $linha['idproduto'];


}







public function cadastro(){
    $query = "insert into estoque
            set 
            quantidade=:qt,
            idproduto=:ip
            ";
    $stmt = $this->conn->prepare($query);
    //Vamos usar uma função para retirar 
    //todos os caracteres especiais vindos de 
    //uma página html.
    //Isso fará com que você evite a execução
    //de comandos maliciosos no banco de dados
    //comandos de sqlinject

$this->quantidade = htmlspecialchars(strip_tags($this->quantidade));
$this->idproduto = htmlspecialchars(strip_tags($this->idproduto));


//Vamos fazer um bindParam(ligção de parâmetros) entre os dados
//enviados pelo usuario no navegado ou smartphone para o banco
//de dados


$stmt->bindParam(":qt",($this->quantidade));
$stmt->bindParam(":ip",$this->idproduto);


//Executar a consulta e verificar se cadastrou
if($stmt->execute()){
    return true;
}
return false;
}




public function atualizar(){


    $query = "update estoque set 
    
    quantidade=:qt,
    idproduto=:ip where
    idestoque=:ie
       ";
$stmt = $this->conn->prepare($query);
//Vamos usar uma função para retirar 
//todos os caracteres especiais vindos de 
//uma página html.
//Isso fará com que você evite a execução
//de comandos maliciosos no banco de dados
//comandos de sqlinject
$this->idestoque = htmlspecialchars(strip_tags($this->idestoque));
$this->quantidade = htmlspecialchars(strip_tags($this->quantidade));
$this->idproduto = htmlspecialchars(strip_tags($this->idproduto));


//Vamos fazer um bindParam(ligção de parâmetros) entre os dados
//enviados pelo usuario no navegado ou smartphone para o banco
//de dados
$stmt->bindParam(":ie",$this->idestoque);
$stmt->bindParam(":qt",$this->quantidade);
$stmt->bindParam(":ip",$this->idproduto);




//Executar a consulta e verificar se cadastrou
if($stmt->execute()){
return true;
}
return false;
}


public function apagar(){
    $query = "delete from estoque where idestoque=?";

    $stmt = $this->conn->prepare($query);

    $this->idestoque=htmlspecialchars(strip_tags($this->idestoque));

    $stmt->bindParam(1,$this->idestoque);

    if($stmt->execute()){
        return true;
    }
    return false;
   }
}

?>