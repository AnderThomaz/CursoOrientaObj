<?php 

namespace Andersonthomaz\Cursophp;

class PessoaFisica2
{
    public string $nome;
    public string $age;
    public string $gender; 
    
    public function showNome(): void
    {
        echo $this->nome . PHP_EOL;
    }
}

?>