<?php

$dados = [
    ['m', 'joao ribeiro'],
    ['f', 'ana silva'],
    ['M', 'carlos martins'],
    ['m', 'joaquim santos'],
    ['g', 'pantufa'],
    ['c', 'lassie'],
    ['f', 'daniela cardoso'],
    ['h', 'chinelo'],
];

class Humanos
{

    private $masculino = [];
    private $feminino = [];
    private $desconhecidos = [];

    public function Definir($sexo, $nome)
    {
        if (strtoupper($sexo) == 'M') {
            $this->masculino[] = $nome;
        } else if (strtoupper($sexo) == 'F') {
            $this->feminino[] = $nome;
        } else {
            $this->desconhecidos[] = $nome;
        }
    }

    public function get_masculino()
    {
        return $this->masculino;
    }
    public function get_feminino()
    {
        return $this->feminino;
    }
    public function get_desconhecidos()
    {
        return $this->desconhecidos;
    }

}


$humanos = new Humanos();

foreach ($dados as $dado) {
    $humanos->definir($dado[0], $dado[1]);

}

$masculino = $humanos->get_masculino();
$feminino = $humanos->get_feminino();
$desconhecidos = $humanos->get_desconhecidos();

?>
