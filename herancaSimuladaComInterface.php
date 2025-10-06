<?php 
interface Animal {
    public function emitirSom();
}

interface Mamifero {
    public function darALuz();
}

class Cachorro implements Animal, Mamifero {
    public function emitirSom() {
        echo "Latindo\n";
    }

    // Corrigido o nome do método para coincidir com a interface
    public function darALuz() {
        echo "Dando a luz a filhotes vivos.\n";
    }
}

$cachorro = new Cachorro();
$cachorro->emitirSom();
$cachorro->darALuz();
?>