<?php


require (__DIR__.'../autoload.php');


use Andersonthomaz\Cursophp\PessoaFisica;


$pessoaFisica = new PessoaFisica();

$pessoaFisica->setNome(nome: "Anderson");
$pessoaFisica->setEmail(email: "anderson.thomaz@gmail.com");
$pessoaFisica->setPhone(phone: "11958563752");
$pessoaFisica->setcpf(cpf: "05261102871");
$pessoaFisica->setAge(age: "18");



var_dump($pessoaFisica);

