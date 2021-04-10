<?php
    date_default_timezone_get();

    abstract class BancoDados{
        const host = 'localhost';
        const dbname = 'crud';
        const user = 'root';
        const password = 'Code1234*';

        static function conectar(){
            try {
                $pdo = new PDO("mysql:
                host=".self::host.";
                dbname=".self::dbname.";
                charset=utf8",
                self::user,
                self::password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $pdo;


            } catch (PDOException $e) {
                echo "Error: ".$e->getMessage();
            }
        }

    }

    abstract class Cadastro{

        static function Aluno($nome, $email, $telefone){

            try {
                $conexao = BancoDados::conectar();
                $inserir = $conexao->prepare('INSERT INTO aluno (nome,email,telefone) VALUES (:nome,:email,:telefone)');
                $inserir->bindValue(':nome',$nome);
                $inserir->bindValue(':email',$email);
                $inserir->bindValue(':telefone',$telefone);
                $inserir->execute();

                return $inserir;

            } catch (PDOException $e) {
                echo "Error: ".$e->getMessage();
            }    

        }
    }

    abstract class Lista{
        static function Alunos(){
            try {
                $conexao = BancoDados::conectar();

                $lista = $conexao->prepare('SELECT * FROM aluno');
                $lista->execute();
                $lista = $lista->fetchAll(PDO::FETCH_OBJ);
                
                return $lista;
                
            } catch (PDOException $e) {
                echo "Error: ".$e->getMessage();
            } 
        }
        static function AlunoUnico($id){
            try {
                $conexao = BancoDados::conectar();

                $lista = $conexao->prepare('SELECT * FROM aluno WHERE id = :id');
                $lista->bindValue(':id',$id);
                $lista->execute();

                $lista = $lista->fetch(PDO::FETCH_OBJ);
                
                return $lista;
                
            } catch (PDOException $e) {
                echo "Error: ".$e->getMessage();
            } 
        }
    }

    abstract class Alteracao{
        static function Aluno($id,$nome,$email,$telefone){
            try {
                $conexao = BancoDados::conectar();
                $altera = $conexao->prepare('UPDATE aluno SET nome = :nome, email = :email, telefone = :telefone WHERE id = :id;');
                $altera->bindValue(':id',$id);
                $altera->bindValue(':nome',$nome);
                $altera->bindValue(':email',$email);
                $altera->bindValue(':telefone',$telefone);
                $altera->execute();
                
                return $altera;

            } catch (PDOException $e) {
                echo "Error: ".$e->getMessage();
            } 
        }
    }

    abstract class Delete{
        static function Aluno($id){
            try {
                $conexao = BancoDados::conectar();
                $delete = $conexao->prepare('DELETE FROM aluno WHERE id = :id');
                $delete->bindValue(':id',$id);
                $delete->execute();
              
            } catch (PDOException $e) {
                echo "Error: ".$e->getMessage();
            }
        }
    }

    $delete = Delete::Aluno(1);



