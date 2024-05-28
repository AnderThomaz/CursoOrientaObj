<?php 

declare(strict_types=1);

namespace Andersonthomaz\Cursophp;

abstract class Pessoa 
{
    public string $nome;

    public function showNome(): void
    {
        echo $this->nome . PHP_EOL;
    }

}
    


?>