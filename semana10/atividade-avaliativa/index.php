<?php
require_once 'autoload.php';

// Processamento do formulário
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['cadastrar'])) {
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $ano = $_POST['ano'];
        $placa = $_POST['placa'];
        $cor = $_POST['cor'];
        $tipo_combustivel = $_POST['tipo_combustivel'];

        $veiculo = new Veiculo($marca, $modelo, $ano, $placa, $cor, $tipo_combustivel);
        $veiculo->salvar();
    } elseif (isset($_POST['excluir'])) {
        $id = $_POST['id'];
        Veiculo::excluir($id);
    }
}

// Construção da página
$pagina = new Pagina("Cadastro de Veículos - Revendedora Reago");

// Formulário de cadastro
$formCadastro = new Formulario("Cadastrar Veículo", "index.php", "post");
$formCadastro->adicionarCampo(new CampoTexto("marca", "Marca:", true));
$formCadastro->adicionarCampo(new CampoTexto("modelo", "Modelo:", true));
$formCadastro->adicionarCampo(new CampoTexto("ano", "Ano:", true));
$formCadastro->adicionarCampo(new CampoTexto("placa", "Placa:", true));
$formCadastro->adicionarCampo(new CampoTexto("cor", "Cor:", false));
$formCadastro->adicionarCampo(new CampoTexto("tipo_combustivel", "Tipo Combustível:", false));
$formCadastro->adicionarBotao(new BotaoSubmit("cadastrar", "Cadastrar"));
$pagina->adicionarElemento($formCadastro);

// Listagem de veículos
$veiculos = Veiculo::listarTodos();
$lista = new Lista("Veículos Cadastrados");

foreach ($veiculos as $veiculo) {
    $texto = "{$veiculo['marca']} - {$veiculo['modelo']} - {$veiculo['ano']} - {$veiculo['placa']} - {$veiculo['cor']} - {$veiculo['tipo_combustivel']}";
    $item = new ItemLista($texto);

    $formExcluir = new Formulario("", "index.php", "post");
    $formExcluir->adicionarCampo(new CampoHidden("id", $veiculo['id']));
    $formExcluir->adicionarBotao(new BotaoSubmit("excluir", "Excluir"));
    $item->adicionarElemento($formExcluir);

    $lista->adicionarItem($item);
}
$pagina->adicionarElemento($lista);

echo $pagina->renderizar();
?>