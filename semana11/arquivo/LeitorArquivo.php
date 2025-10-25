<?php    
class LeitorArquivo{
    private string $caminho;
    private $arquivo;
    private string $conteudo;

    // Construtor: já define o caminho do arquivo
    public function __construct(string $caminho) {
        $this->setCaminho($caminho);
    }

    // Getter e Setter para o caminho do arquivo
    public function getCaminho(){
        return $this->caminho;
    }

    public function setCaminho(string $caminho){
        $this->caminho = $caminho;
    }

    // Método para abrir o arquivo
    public function abrir(){
        if (!file_exists($this->getCaminho())) {
            throw new Exception("Arquivo não encontrado: " . $this->getCaminho());
        }

        $this->arquivo = fopen($this->getCaminho(), 'r');

        if (!$this->arquivo) {
            throw new Exception("Falha ao abrir o arquivo: " . $this->getCaminho());
        }
    }

    // Método para ler o conteúdo
    public function ler(){
        if (!$this->arquivo) {
            throw new Exception("Arquivo não está aberto para leitura.");
        }

        $this->conteudo = fread($this->arquivo, filesize($this->getCaminho()));
        return $this->conteudo;
    }

    // Método para fechar o arquivo
    public function fechar(){
        if ($this->arquivo) {
            fclose($this->arquivo);
            echo "Arquivo fechado com sucesso (finally).\n";
        }
    }
}

?>
