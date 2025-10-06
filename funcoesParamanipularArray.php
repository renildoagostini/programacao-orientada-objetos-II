<?php 

    //array_pop() - Remove e retorna o ultimo elemento do array
    $frutas = array("maçã", "banana", "laranja");
    $ultima = array_pop($frutas);
    echo $ultima . "<br>";

    //aray_shift() - Remove e retorna o primeiro elemento do array
    $primeira = array_shift($frutas);
    echo $primeira . "<br><br><br>";

    echo "<hr>";    
?>

<?php 
//array_usnhift() - Adiciona um ou mais elementos no array
$frutas = array("maçã", "banana", "laranja");
array_unshift($frutas, "morango", "pera");

print_r($frutas);

echo "<br><br><br>";
echo "<hr>";

?>

<?php 
// array_push() - Adiciona um ou mais elementos no final do array
$frutas = array("maçã", "banana", "laranja");
array_push($frutas, "morango", "pera");

print_r($frutas);

echo "<br><br><br>";
echo "<hr>";
?>


<?php 
    //array_merge() - combina dois ou mais array em um unico array
    $frutas1 = array("maçã", "banana");
    $frutas2 = array("laranja", "morango");
    $combinada = array_merge($frutas1, $frutas2);

    //exibindo somente os nomes das frutas
    
    foreach($combinada as $fruta){
        echo $fruta . "<br>";
    }

    echo "<br><br><br>";
    echo "<hr>";
?>

<?php 
    //array_slice() - Retorna uma parte do array com base no indice
    $frutas = array("maçã", "banana", "laranja", "morango");
    $parte = array_slice($frutas, 0, 3);

    foreach($parte as $fruta){
        echo $fruta . "<br>";
    }

    echo "<br><br><br>";
    echo "<hr>";
?>


<?php 
    //array_search() - procurar por um valor em um array e retornar a chave correspondente
    $frutas = array("maçã", "banana", "laranja", "morango");
    $chave = array_search("banana", $frutas);

    echo "<br><br>Chave da fruta 'banana': " . $chave;
    echo "<br><br><br>";
    echo "<hr>";
    
?>