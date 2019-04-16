<?php

//ciclo while
echo "--- Tabellina usando il ciclo while ---";
echo "<br>";

$moltiplicatore = 1;
while ($moltiplicatore <= 10) {
    $risultato = 1 * $moltiplicatore;
    echo "1 * " . $moltiplicatore . " = " . $risultato . "<br/>";
    $moltiplicatore++;
}


//stesso ciclo realizzato con ciclo do while

echo "<br>";
echo "--- Tabellina usando il ciclo do/while ---";
echo "<br>";

$moltiplicatore = 1;
do {
    $risultato = 1 * $moltiplicatore;
    echo "1 * " . $moltiplicatore . " = " . $risultato . "<br/>";
    $moltiplicatore++;
} while ($moltiplicatore <= 10);


echo "<br>";
echo "--- Stampa alfabeto con ciclo for ---";
echo "<br>";

for ($i = 'A'; $i <= 'Y'; $i++){
    echo "$i ";
}

echo " Z";

echo "<br>";
echo "<br>";
echo "--- Stampa alfabeto con funzione ---";
echo "<br>";
function stampaAlfabeto() {
    for ($i = 'A'; $i <= 'Y'; $i++){
        echo "$i ";
    }
    echo " Z";
}
stampaAlfabeto();

echo "<br>";
echo "<br>";


//stampa contenuto di una porzione di array

$array = [1, 2, "pippo", 4, 5, 6, 7, 8, 9];
$output = array_slice($array, 0, 3);
print_r($output);

echo "<br>";
echo "<br>";


//stampa della chiave dell'array e dei valori degli array

$array = [
    'Simone' => 29,
    'Marco' => 28,
    'Michele' => 35,
    'Luca' => 22
];
$nomi = array_keys($array);
$anni = array_values($array);
print_r($nomi);
print_r($anni);

echo "<br>";
echo "<br>";

//stampa della chiave dell'array e dei valori degli array tramite un ciclo for
$counter = count($array);
for ($i = 0; $i < $counter; $i++) {
    echo "Nome: " . $nomi[$i];
    echo "<br>";
    echo "Anni: " . $anni[$i];
    echo "<br>"."<br>";
}
//stesso ciclo di quello di prima ma col ciclo foreach
foreach ($array as $stampaArray) {
    echo $stampaArray . "<br>";
}

//stesso ciclo di quello di prima ma col ciclo foreach e stampa chiavi e valori
echo "<br>";
echo "Stampa di chiavi e valori tramite ciclo foreach";
echo "<br>" . "<br>";
foreach ($array as $key => $value) {
    echo "Nome: " . $key . "<br>" . "Anni: " . $value . " " . "<br>" . "<br>";
}

echo "<br>";
echo "Riordino di array";
echo "<br><br>";

$arrayOrdino = array(3,7,6,4,5,9,11,13,1,2);

for ($i=0; $i < count($arrayOrdino); $i++) {
    echo "<br>Sto ciclando con i:  $i <br>";
    for ($y=0; $y < count($arrayOrdino); $y++) {
        echo "<br>Sto ciclando internamente con y:  $y";
        echo "<br>confronto tra " . $arrayOrdino[$i] . " e " . $arrayOrdino[$y];
        if ($arrayOrdino[$i] < $arrayOrdino[$y]) {
            echo "<br> Sono dentro if.";
            $tmp = $arrayOrdino[$i];
            $arrayOrdino[$i] = $arrayOrdino[$y];
            $arrayOrdino[$y] = $tmp;
        }
        echo "<br>Ordine attuale Array: ";
        print_r ($arrayOrdino);
        echo "<br>" . "<br>";
    }
}

echo "<br>";
echo "--- Stampa array in ordine con sort ---";
echo "<br>";

sort($arrayOrdino);
$clength = count($arrayOrdino);
for ($i = 0; $i < $clength; $i++) {
    echo $arrayOrdino[$i];
    echo"<br>";
}

echo "<br>";
echo "--- Creazione di funzioni: minimo / massimo / media dei valori di un array ---";
echo "<br>";

function minimo ($arrayOrdino) {
    $min=$arrayOrdino[0];
    for($i=1; $i<count($arrayOrdino); $i++)
    if($arrayOrdino[$i]<$min){
        $min=$arrayOrdino[$i];
    }
    return $min;
}

function massimo ($arrayOrdino) {
    $max=$arrayOrdino[0];
    for($i=1; $i<count($arrayOrdino); $i++)
    if($arrayOrdino[$i]>$max){
        $max=$arrayOrdino[$i];
    }
    return $max;
}

function media ($arrayOrdino) {
    $somma = 0;
    for ($i=0; $i < count($arrayOrdino); $i++) {
        $somma += $arrayOrdino[$i];  // $somma = $somma + $arrayOrdino[$i]
        $mediaArray = $somma / count($arrayOrdino);
    }
    return $mediaArray;
}

echo "Minimo: " . minimo($arrayOrdino);
echo "<br>";
echo "Massimo: " . massimo($arrayOrdino);
echo "<br>";
echo "Media: " . media($arrayOrdino);
echo "<br>";

echo "<br>";
echo "--- Calcolo media di array con funzione array_sum ---";
echo "<br>";

$media = array_sum($arrayOrdino) / count($arrayOrdino);
echo "Media con array_sum: " . "$media";

echo "<br>";
echo "<br>";
$random = array_rand($arrayOrdino);
echo "Elemento random con array_rand: " . "$random";

echo "<br>";
$arrayMax = max($arrayOrdino);
echo "Numero massimo di un array: " . $arrayMax;

echo "<br>";
$arrayMin = min($arrayOrdino);
echo "Numero minimo di un array: " . $arrayMin;

?>