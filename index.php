<?php
class movie
{
    public $nome;
    public $data_uscita;
    public $genere;
    // construct
    function __construct($nome, $data_uscita, $genere)
    {
        $this->nome = $nome;
        $this->data_uscita = $data_uscita;
        $this->genere = $genere;
    }
}
// dichiarazione funzione dentro alla classe
$films = new movie('pirati dei caraibi', '02-01-2020', 'divertente');

var_dump($films);
echo "<br> -----------";
// variabili di instanza 
var_dump($films->nome = 'ritorno al futuro');
echo "<br>";
var_dump($films->data_uscita = '02-02-2024');
echo "<br>";
var_dump($films->genere = 'scientifico');

