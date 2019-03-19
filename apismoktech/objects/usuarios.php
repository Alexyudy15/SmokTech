<?php
/*
Esta classe guarda as informações sobre os usuários:
        - Suas propriedades e métodos do CRUD
        C - Create(Insert)
        R - Retriver|Read(Selects)
        U - Updates(Atualizações)
        D - Delete(Apagar dados)
*/
class Usuarios{
    //Abaixo são apresentados os atributos da 
    //classe usuarios. Veja que eles refletem
    //os campos da tabela usuarios do banco
    //de dados
    public $idusuario;
    public $email;
    public $senha;
    public $nome;
    public $cpf;
    public $telefone;
    

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
    $query = "Select * from usuarios";

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
    $query = "select * from usuarios where idusuario=?";

    //preparando a consulta para a execução
    $stmt=$this->conn->prepare($query);

    //Vamos fazer um bind(ligação) do id pesquisado
    // com o parâmetro da consulta, neste caso é o 
    //ponto de interrogação
    $stmt->bindParam(1,$this->idusuario);

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
    $this->email = $linha['email'];
    $this->senha = $linha['senha'];
    $this->nome = $linha['nome'];
    $this->cpf = $linha['cpf'];
    $this->telefone = $linha['telefone'];
    

}

//------Retornar usuarios por cpf
public function listarPorCPF(){
    $query = "select * from usuarios where cpf=?";

    //preparando a consulta para a execução
    $stmt=$this->conn->prepare($query);

    //Vamos fazer um bind(ligação) do cpf pesquisado
    // com o parâmetro da consulta, neste caso é o 
    //ponto de interrogação
    $stmt->bindParam(1,$this->cpf);

    //Executar efetivamente a consulta
    $stmt->execute();

    $num_rows = mysql_num_rows($stmt);
    //Organizar os dados retornados da consulta para
    //a exibição em formato json
    //Vamos usar uma variável e um array para associar
    //os campos da tabela
    $linha = $stmt->fetch(PDO::FETCH_ASSOC);

    //Organizar no objeto usuario(arquivo usuarios.php)
    // os dados retornados
    //da tabela usuarios que está no banco de dados.
    $this->idusuario = $linha['idusuario'];
    $this->email = $linha['email'];
    $this->senha = $linha['senha'];
    $this->nome = $linha['nome'];
    $this->telefone = $linha['telefone'];
    

  
}

//-----Login do usuario -----

public function logar(){
    /*
    Abaixo é apresentada a consulta para localizar um usuário
    por meio de seu email e senha. Quando encontrado retorna
    a mensagem de logado. E quando não localizado retorna a 
    mensagem de usuário ou senha incorretos.
    */
    $query = "select * from usuarios where email=? and senha=?";

    //preparando a consulta para a execução
    $stmt=$this->conn->prepare($query);

    /*
    Na query acima foram passados 2 parâmetros para o select. Um para o email e
    o outro para o campo senha. Ambos são representados pelo ponto de 
    interrogação(?).
    Para fazer a passagem dos dados aos parâmetros estamos declarando abaixo o objeto
    stmt(statement), chamando a função de ligação bindParam para que faça a ligação
    do parâmetro(?) com os dados do usuário(email e senha).
    */
    $stmt->bindParam(1,$this->email);

    /*
    Para a senha foi utilizado o comando md5 para realizar a encriptografia
    */
    $stmt->bindParam(2,$this->senha);

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
    $this->idusuario = $linha['idusuario'];
    $this->email = $linha['email'];
    $this->nome = $linha['nome'];
    $this->cpf=$linha['cpf'];
    $this->telefone = $linha['telefone'];
    
    /*
    após logar será retornado os dados do usuário que efetuou o login
    */
   return Usuarios;

}




//----Cadastro do Usuario
public function cadastro(){
    $query = "insert into usuarios 
            set 
                email=:e,
                senha=:s,
                nome=:n,
                telefone=:t,
                cpf=:c";
    $stmt = $this->conn->prepare($query);
    //Vamos usar uma função para retirar 
    //todos os caracteres especiais vindos de 
    //uma página html.
    //Isso fará com que você evite a execução
    //de comandos maliciosos no banco de dados
    //comandos de sqlinject
$this->email = htmlspecialchars(strip_tags($this->email));
$this->senha = htmlspecialchars(strip_tags($this->senha));
$this->nome = htmlspecialchars(strip_tags($this->nome));
$this->cpf = htmlspecialchars(strip_tags($this->cpf));
$this->telefone = htmlspecialchars(strip_tags($this->telefone));


//Vamos fazer um bindParam(ligção de parâmetros) entre os dados
//enviados pelo usuario no navegado ou smartphone para o banco
//de dados

$stmt->bindParam(":e",$this->email);
$stmt->bindParam(":s",$this->senha);
$stmt->bindParam(":n",$this->nome);
$stmt->bindParam(":c",$this->cpf);
$stmt->bindParam(":t",$this->telefone);


//Executar a consulta e verificar se cadastrou
if($stmt->execute()){
    return true;
}
return false;
}




public function atualizar(){


    $query = "update usuarios set 
        email=:e,
        nome=:n,
        telefone=:t,
        cpf=:c
        where idusuario=:idusuario";
$stmt = $this->conn->prepare($query);
//Vamos usar uma função para retirar 
//todos os caracteres especiais vindos de 
//uma página html.
//Isso fará com que você evite a execução
//de comandos maliciosos no banco de dados
//comandos de sqlinject
$this->email = htmlspecialchars(strip_tags($this->email));
$this->nome = htmlspecialchars(strip_tags($this->nome));
$this->cpf = htmlspecialchars(strip_tags($this->cpf));
$this->telefone = htmlspecialchars(strip_tags($this->telefone));
$this->idusuario = htmlspecialchars(strip_tags($this->idusuario));

//Vamos fazer um bindParam(ligção de parâmetros) entre os dados
//enviados pelo usuario no navegado ou smartphone para o banco
//de dados
$stmt->bindParam(":idusuario",$this->idusuario);
$stmt->bindParam(":e",$this->email);
$stmt->bindParam(":n",$this->nome);
$stmt->bindParam(":c",$this->cpf);
$stmt->bindParam(":t",$this->telefone);



//Executar a consulta e verificar se cadastrou
if($stmt->execute()){
return true;
}
return false;
}


public function apagar(){
    $query = "delete from usuarios where idusuario=?";

    $stmt = $this->conn->prepare($query);

    $this->idusuario=htmlspecialchars(strip_tags($this->idusuario));

    $stmt->bindParam(1,$this->idusuario);

    if($stmt->execute()){
        return true;
    }
    return false;
   }
}

?>