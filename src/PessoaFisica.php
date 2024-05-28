<?php 

declare(strict_types=1);

namespace Andersonthomaz\Cursophp;


class PessoaFisica {
        // propriedades e metodos
        public string $nome;
        public string $email;
        public string $phone;
        public string $cpf; 
        public int $age;

        public function setNome(string $nome): void
        {
            $this->nome = $nome;
        }

        public function setEmail(string $email): void
        {
            $this->email = $email;
        }

        public function setPhone(string $phone): void
        {
            $this->phone = $phone;
        }

        public function setcpf(string $cpf): void
        {
            $this->cpf = $cpf;
        }

        public function setAge(int $age): void
        {
            $this->age = $age;
        }
}

