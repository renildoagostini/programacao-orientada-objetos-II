<?php echo '<h1>Programação Orientada a Objetos</h1>'?>

<?php echo '<h2>Semana 2</h2>'?>

<?php echo '<h3>Introdução ao PHP</h3>'?>

<?php echo '<h2>Saída de dados</h2>'?>

<?php 
echo 'Echo - comando que imprime uma ou mais variáveis';
?>
<br>

<?php 
print 'print - é uma função que imprime uma string na saída.';
?>
<br>

<?php 
print 'A diferença básica entre print e echo é que print sempre retorna 1, podendo ser útil em alguma situação específica.';
?>
<br>

<?php 
echo 'var_dump - Imprime o conteúdo de uma variável na saída. Este comando é útil quando desejamos procurar por erros de execução e investigar valores atribuídos a variáveis. Muito usado também quando temos variáveis complexas como arrays e objetos, pois mostra todos os seus componentes.';
?>
<br>


<?php 
    echo '<br>';
    $var =  '5'; // atribuição do valor 5 à variável $var
    echo $var;
    echo '<br>';

    $var += 5; // adiciona 5 a variável $var
    echo $var;
    echo '<br>';

    $var -= 4; // subtrai 3 a variável $var
    echo $var;
    echo '<br>';
?>
<br>
<?php 
    $var = 8;
    echo $var;
    echo '<br>';
    $var++; //incrementa em 1 o valor em $var
    echo $var;
    echo '<br>';

    $var--; //decrementa o valor em $var
    echo $var;
    echo '<br>';

    $var++; //pos incremento
    ++$var; //pre incremento
?>