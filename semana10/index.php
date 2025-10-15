<?php

require_once 'autoload.php';

// Processamento do formulário
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['cadastrar'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        
        $cliente = new Cliente($nome, $email, $telefone);
        $cliente->salvar();
    } elseif (isset($_POST['excluir'])) {
        $id = $_POST['id'];
        Cliente::excluir($id);
    }
}

// Construir a página
$pagina = new Pagina("CRUD PHP-OO");

// Adicionar formulário de cadastro
$formCadastro = new Formulario("Cadastrar Cliente", "index.php", "post");
$formCadastro->adicionarCampo(new CampoTexto("nome", "Nome:", true));
$formCadastro->adicionarCampo(new CampoEmail("email", "Email:", true));
$formCadastro->adicionarCampo(new CampoTexto("telefone", "Telefone:", true));
$formCadastro->adicionarBotao(new BotaoSubmit("cadastrar", "Cadastrar"));
$pagina->adicionarElemento($formCadastro);

// Listar todos os clientes
$clientes = Cliente::listarTodos();
$listaClientes = new Lista("Clientes Cadastrados");
foreach ($clientes as $cliente) {
    $itemLista = new ItemLista($cliente['nome'] . ' - ' . $cliente['email'] . ' - ' . $cliente['telefone']);
    $formExcluir = new Formulario("", "index.php", "post");
    $formExcluir->adicionarCampo(new CampoHidden("id", $cliente['id']));
    $formExcluir->adicionarBotao(new BotaoSubmit("excluir", "Excluir"));
    $itemLista->adicionarElemento($formExcluir);
    $listaClientes->adicionarItem($itemLista);
}
$pagina->adicionarElemento($listaClientes);

// Renderizar a página
echo $pagina->renderizar();
?>
