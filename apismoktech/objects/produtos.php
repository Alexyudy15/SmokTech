<?php

/*
Esta classe guarda as informações sobre os usuários:
        - Suas propriedades e métodos do CRUD
        C - Create(Insert)
        R - Retriver|Read(Selects)
        U - Updates(Atualizações)
        D - Delete(Apagar dados)
*/
class Produtos{

        public $idproduto;
        public $nomeproduto;
        public $descricao;
        public $preco;
        public $img1;
        public $idfornecedores;
        
 


//Abaixo é apresentado o construtor da classe produtos
//Ele é reponsável por iniciar a classe.
//Em php usamos o temo __construct para declarar
//um construtor
public function __construct($db){
        $this->conn = $db;
}
/*
Vamos criar o primeiro elemento relacionado ao crud para a classe
produtos.
Listaremos os produtos cadastrados
*/
public function listar(){

        //vamos criar uma variável para guardar 
        //a string da consulta do sql
        $query= "select * from produtos";

        //Preparar a execução da consulta
        //A variável stmt(Statement(contexto)) irá guardar
        //o resultado da execução da consulta
        $stmt = $this->conn->prepare($query);

        //Vamos executar efetivamente a consulta
        $stmt->execute();

        //retornar os dados que foram selecionados
        return $stmt;
        }

        //--Retorna os dados do produto por nome

        public function listarPorNome(){
                $query = "Select * from produtos where nomeproduto like %?%";

                $stmt = $this->conn->prepare($query);

                //vamos fazer um bind(ligação) do nomeproduto
                //pesquisado com o parâmetro da consulta(?)
                $stmt->bindParam(1,$this->nomeproduto);

                //executar a consulta
                $stmt->execute();


                //Organizar os dados da consulta para o retorno
                $linha = $stmt->fetch(PDO::FETCH_ASSOC);

                $this->idproduto = $linha['idproduto'];
                $this->nomeproduto = $linha['nomeproduto'];
                $this->descricao = $linha['descricao'];
                $this->preco = $linha['preco'];
                $this->img1 = $linha['img1'];
                
        


        }

        public function cadastro(){

                $query = "insert into produtos 
                set
                        nomeproduto=:n,
                        descricao=:d,
                        preco=:p,
                        img1=:i1,
                        idfornecedores=:idfornecedores";
                   

                $stmt = $this->conn->prepare($query);

                $this->nomeproduto = htmlspecialchars(strip_tags($this->nomeproduto));
                $this->descricao = htmlspecialchars(strip_tags($this->descricao));
                $this->preco = htmlspecialchars(strip_tags($this->preco));
                $this->img1=htmlspecialchars(strip_tags($this->img1));
                $this->idfornecedores=htmlspecialchars(strip_tags($this->idfornecedores));
                


                $stmt->bindParam(":n",$this->nomeproduto);
                $stmt->bindParam(":d",$this->descricao);
                $stmt->bindParam(":p",$this->preco);
                $stmt->bindParam(":i1",$this->img1);
                $stmt->bindParam(":idfornecedores",$this->idfornecedores);
        


                if($stmt->execute()){
                        return true;
                }
                return false;

        }
        public function atualizar(){


                $query = "update produtos set 
                nomeproduto=:n,
                descricao=:d,
                preco=:p,
                img1=:i1"
                
                ;
            $stmt = $this->conn->prepare($query);
            //Vamos usar uma função para retirar 
            //todos os caracteres especiais vindos de 
            //uma página html.
            //Isso fará com que você evite a execução
            //de comandos maliciosos no banco de dados
            //comandos de sqlinject
            $this->nomeproduto = htmlspecialchars(strip_tags($this->nomeproduto));
            $this->descricao = htmlspecialchars(strip_tags($this->descricao));
            $this->preco = htmlspecialchars(strip_tags($this->preco));
            $this->img1=htmlspecialchars(strip_tags($this->img1));
            
            //Vamos fazer um bindParam(ligção de parâmetros) entre os dados
            //enviados pelo usuario no navegado ou smartphone para o banco
            //de dados
            $stmt->bindParam(":n",$this->nomeproduto);
            $stmt->bindParam(":d",$this->descricao);
            $stmt->bindParam(":p",$this->preco);
            $stmt->bindParam(":i1",$this->img1);
            
            
            
            //Executar a consulta e verificar se cadastrou
            if($stmt->execute()){
            return true;
            }
            return false;
            }

            public function apagar(){
                $query = "delete from produtos where idproduto=?";
            
                $stmt = $this->conn->prepare($query);
            
                $this->idproduto=htmlspecialchars(strip_tags($this->idproduto));
            
                $stmt->bindParam(1,$this->idproduto);
            
                if($stmt->execute()){
                    return true;
                }
                return false;
               }
}

?>