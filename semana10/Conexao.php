<?php

class Conexao {
    private static $instancia;
    private $conexao;
    private static $host = 'localhost';
    private static $dbname = 'sem9';
    private static $usuario = 'root';
    private static $senha = 'reago';

    // Método privado para evitar instanciação externa
    private function __construct() {
        try{
            $this->conexao = new PDO("mysql:host=".self::$host.";dbname=".self::$dbname, self::$usuario, self::$senha);
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e){
            echo "Não conseguiu conectar ao banco de dados: Código de erro: ". $e->getCode();
            die();
        }
    }

    // Método estático para obter a instância única da conexão
    public static function obterInstancia() {
        if (!isset(self::$instancia)) {
            self::$instancia = new self();
        }
        return self::$instancia;
    }

    // Método para obter a conexão
    public function getConexao() {
        return $this->conexao;
    }
}

?>