<?php

spl_autoload_register(function ($class_name){
    include $class_name . '.php';
});
 
//constrói a página
$pagina = new Pagina('Teste de Pagina');

//constrói o formulário
$formCadastro = new Formulario("Cadastrar Cliente", "teste.php", "post");
$formCadastro->adicionarCampo(new CampoTexto("nome", "Nome: ", true));
$formCadastro->adicionarCampo(new CampoEmail("email", "E-mail: ", true));
$formCadastro->adicionarCampo(new CampoTexto("telefone", "Telefone: ", true));
$formCadastro->adicionarBotao(new BotaoSubmit("cadastrar", "Cadastrar"));

//adiciona o formulário na página
$pagina->adicionarElemento($formCadastro);

//renderiza a página
echo $pagina->renderizar();