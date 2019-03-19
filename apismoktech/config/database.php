<?php
#arquivo de configuração da conexao com
#o banco de dados

//vamos criar uma variável para representar a 
//conexao com o banco de dados
class Database{
public $conn;

//Agora vamos criar uma função para estabelecer a conexão com o banco
//de dados. Para isso será necessário passar as seguintes informações:
// usuário do banco de dados: root
// nome ou ip do servidor de banco de dados: localhost
// porta de comunicação: 3307
// senha do banco: "" ( em branco )
function getConnection(){
    try{
        $conn = new PDO("mysql:host=10.26.43.243;port=3306;dbname=smoktech","admin","123@Senac");
    }
    catch(PDOException $ex){
        echo "Erro ao tentar estabelecer a conexão com o banco. ".$ex->getMessage();
    }
    return $conn;
}
}

?>