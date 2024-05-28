<?php 

declare(strict_types=1);

namespace Andersonthomaz\Cursophp;


class PessoaFisica {

        const Objetc_type = 'Ser Humano';
        // propriedades e metodos
        private string $nome;
        private static string $email = '';
        private string $phone;
        private string $cpf; 
        private int $age;

        public function __construct(
           string $nome,
           string $email,
           string $phone,
           string $cpf,
           int $age
        )
        {
            $this->nome = $nome;
            self::$email = $email;
            $this->phone = $phone;
            $this->cpf = $cpf;
            $this->age = $age;
        }

        public function setName(string $nome): static
        {
            $this->nome = $nome;
            return $this;
        }

        public static function getInformation(string $email): string
        {
            self::$email = $email;
            return self::$email . "-" . self::Objetc_type;
            
        }
}