<?php

class Veiculo {
    private $marca;
    private $modelo;
    private $ano;
    private $placa;
    private $cor;
    private $tipo_combustivel;

    public function __construct($marca, $modelo, $ano, $placa, $cor, $tipo_combustivel) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->placa = $placa;
        $this->cor = $cor;
        $this->tipo_combustivel = $tipo_combustivel;
    }

    public function salvar() {
        $conexao = Conexao::obterInstancia()->getConexao();
        $sql = "INSERT INTO cadastro (marca, modelo, ano, placa, cor, tipo_combustivel)
                VALUES (:marca, :modelo, :ano, :placa, :cor, :tipo_combustivel)";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':marca', $this->marca);
        $stmt->bindValue(':modelo', $this->modelo);
        $stmt->bindValue(':ano', $this->ano);
        $stmt->bindValue(':placa', $this->placa);
        $stmt->bindValue(':cor', $this->cor);
        $stmt->bindValue(':tipo_combustivel', $this->tipo_combustivel);
        $stmt->execute();
    }

    public static function listarTodos() {
        $conexao = Conexao::obterInstancia()->getConexao();
        $sql = "SELECT * FROM cadastro ORDER BY id DESC";
        $stmt = $conexao->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function excluir($id) {
        $conexao = Conexao::obterInstancia()->getConexao();
        $sql = "DELETE FROM cadastro WHERE id = :id";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
    }
}
?>