<?php
class Conexao {
    private static $instancia;
    private $conexao;

    // Ajuste das credenciais conforme informado
    private static $host = 'localhost';
    private static $dbname = 'revendedora_reago';
    private static $usuario = 'root';
    private static $senha = 'reago';
    private static $port = 3306; // altere se seu MySQL usa outra porta

    private function __construct() {
        try {
            $dsn = "mysql:host=" . self::$host . ";port=" . self::$port . ";dbname=" . self::$dbname . ";charset=utf8mb4";
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $this->conexao = new PDO($dsn, self::$usuario, self::$senha, $options);
        } catch (PDOException $e) {
            // Mensagem de erro mais informativa para debug (remova ou logue em produção)
            echo "Erro ao conectar ao banco de dados: (" . $e->getCode() . ") " . $e->getMessage();
            die();
        }
    }

    public static function obterInstancia() {
        if (!isset(self::$instancia)) {
            self::$instancia = new self();
        }
        return self::$instancia;
    }

    public function getConexao() {
        return $this->conexao;
    }
}
?>