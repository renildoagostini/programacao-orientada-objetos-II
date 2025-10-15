<?php

class Cliente {
    private $nome;
    private $email;
    private $telefone;

    public function __construct($nome, $email, $telefone) {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
    }

    public function salvar() {
        $conexao = Conexao::obterInstancia()->getConexao();
        $sql = "INSERT INTO clientes (nome, email, telefone) VALUES (:nome, :email, :telefone)";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':nome', $this->nome);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':telefone', $this->telefone);
        $stmt->execute();
    }

    public static function listarTodos() {
        $conexao = Conexao::obterInstancia()->getConexao();
        $sql = "SELECT * FROM clientes";
        $stmt = $conexao->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function excluir($id) {
        $conexao = Conexao::obterInstancia()->getConexao();
        $sql = "DELETE FROM clientes WHERE id = :id";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
    }
}
?>
