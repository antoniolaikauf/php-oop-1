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
    // aggiunta metodo
    public function changegenere($genere)
    {
        $this->genere = $genere;
    }
    public function getgenere()
    {
        return $this->genere;
    }
}
// dichiarazione funzione dentro alla classe
$films = new movie('pirati dei caraibi', '02-01-2020', 'divertente');
$films1 = new movie('transformers', '02-01-2010', 'fantascientifico');
// stampaggio dei due film 
var_dump($films);
echo "<br> ----------- <br>";
var_dump($films1);
echo "<br> ----------- <br>";

// variabili di instanza 
var_dump($films->nome = 'ritorno al futuro');
echo "<br>";
var_dump($films->data_uscita = '02-02-2024');
echo "<br>";
var_dump($films->genere = 'scientifico');

echo "<br> ----------- <br>";
// cambiato parametro con un metodo
$films->changegenere('drammatico');
var_dump($films->getgenere());
echo "<br>";
echo "<br>";

// BONUS
echo 'bonus';
echo "<br> ----------- <br>";

class moviebonus
{
    public $nome;
    public $data_uscita;
    public $genere;
    // construct
    function __construct($nome, $data_uscita, ...$generi)
    {
        $this->nome = $nome;
        $this->data_uscita = $data_uscita;
        $this->genere = $generi;
    }
}

$filmsbonus = new moviebonus('pirati dei caraibi', '02-01-2020', 'romantico', 'drammatico');

var_dump($filmsbonus);
echo "<br> ----------- <br>";
