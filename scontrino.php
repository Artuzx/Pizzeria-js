<?php

error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
ini_set('display_errors', '0');

//Dati cliente
$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$indirizzo = $_POST['indirizzo'];
$contapizza = $_POST['contatorepizza'];

//Array per dopo usarle nel for e calcolare il conto
$pizzescelta = [];
$pizzescelta[0] = $_POST['pizza'];
for($i=1; $i<=$contapizza; $i++){
    $pizzescelta[$i] = $_POST['pizza' . $i];
}
$prezzi = ["Margherita 7$" => 7, "Diavola 9$" => 9, "Patatosa 8$" => 8, "Marinara 8$" => 8,];

$quantita = [];
$quantita[0] = $_POST['qt'];
for( $i=1; $i<=$contapizza; $i++){
    $quantita[$i] = $_POST['qt' . $i];
}


$conto = 0;
//Calcolo del conto, uso un for e non foreach per poter scorrere le pizze con un indice e calcolarle con la quantita'
for ($i = 0; $i < $contapizza+1; $i++) {
    $pizza = $pizzescelta[$i];
    $qta = (int)$quantita[$i];
    if (isset($prezzi[$pizza])) {
        $conto += $prezzi[$pizza] * $qta;
    }
}

//Stampo lo scontrino
echo "Nome: $nome<br>";
echo "Cognome: $cognome<br>";
echo "Pizze ordinate:<br>";
for ($i = 0; $i < $contapizza+1; $i++) {
    echo "{$pizzescelta[$i]} x{$quantita[$i]}<br>";
}
echo "<br>Il tuo conto è: $conto$<br>";



?>
