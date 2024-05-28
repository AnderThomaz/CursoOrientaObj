<?php


require (__DIR__ . '../autoload.php');

use Andersonthomaz\Cursophp\Pessoa;
use Andersonthomaz\Cursophp\PessoaFisica2;
use Andersonthomaz\Cursophp\PessoaJuridica;

$AndersonTh = new PessoaFisica2;

$AndersonTh->nome = "Anderson";
$AndersonTh->age = 36;
$AndersonTh->gender = 'M';
$AndersonTh->cpf = "05261102871";


$mobyou = new PessoaJuridica;

$mobyou->nome = "Thomaz LTDA";
$mobyou->cnpj = '235226565000011122';

dump($mobyou->showNome());

if($mobyou instanceof Pessoa) {
    dump(var: " è pessoa tbm");
} else {
    dump(var: "Não e pessoa ");
}


