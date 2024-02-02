<?php
class movie
{
    public $nome;
    public $data_uscita;
    public $genere;
}

$films = new movie;
// variabili di instanza 
var_dump($films->nome = 'ritorno al futuro');
echo "<br>";
var_dump($films->nome = '02-02-2024');
echo "<br>";
var_dump($films->nome = 'scientifico');
