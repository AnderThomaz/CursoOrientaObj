<?php


require (__DIR__ . '../autoload.php');

use Andersonthomaz\Cursophp\PessoaFisica2;
use Andersonthomaz\Cursophp\PessoaJuridica;

$AndersonTh = new PessoaFisica2;

$AndersonTh->nome = "Anderson";
$AndersonTh->age = 36;
$AndersonTh->gender = 'M';


$mobyou = new PessoaJuridica;

$mobyou->nome = "Thomaz LTDA";
$mobyou->age = 35;
$mobyou->gender = "I";

dump($AndersonTh, $mobyou);
dump($AndersonTh->showNome(), $AndersonTh->showNome());

if($mobyou instanceof PessoaFisica2) {
    dump(var: " è pessoa fisica tbm");
} else {
    dump(var: "Não e pessoa fisica");
}


