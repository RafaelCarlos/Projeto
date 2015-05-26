<?php

include_once '../conexao/Conexao.php';
include_once '../model/Usuario.php';

class UsuarioDao {

    public static $instance;

    public function __construct() {
        
    }

    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new UsuarioDao();
        return self::$instance;
    }

    public function getNextID() {
        try {
            $sql = "SELECT Auto_increment FROM 
information_schema.tables WHERE table_name='usuario'";
            $result = Conexao::getInstance()->query($sql);
            $final_result = $result->fetch(PDO::FETCH_ASSOC);
            return $final_result['Auto_increment'];
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar 
esta ação, foi gerado um LOG do mesmo, tente novamente mais 
tarde.";
        }
    }

    public static function login($login, $senha) {
        try {
            $stmt = Conexao::getInstance()->prepare('SELECT * FROM usuario WHERE login = :login AND senha = :senha');
            $stmt->execute(array(
                ':login' => $login,
                ':senha' => $senha
            ));
            echo "Logou 1";
            while ($usuario = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $id_usuario = $usuario['id_usuario'];
            }
            if (!empty($id_usuario)) {
                return $id_usuario;
           
            }
            echo "Logou 2";
            return false;
            echo "Logou 3";
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function inserir(Usuario $usuario) {
        try {
            $sql = "INSERT INTO usuario ( 
                    login,
                    senha,
                    apelido)
                    VALUES (
                    :login,
                    :senha,
                    :apelido)";

            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":login", $usuario->getLogin());
            $p_sql->bindValue(":senha", $usuario->getSenha());
            $p_sql->bindValue(":apelido", $usuario->getApelido());

            return $p_sql->execute();
            header('location:sucesso.php');
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
        }
    }

}
