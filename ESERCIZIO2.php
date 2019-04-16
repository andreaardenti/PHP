<html>
<head>
    <title>Hello World ....in php</title>
</head>
<body>
<?php

$a=9;
$b=5;

echo "Somma<br>";
$c=$a+$b;
echo $a ."+" .$b ."=".$c;
//oppure
echo "<br>$a + $b = $c";
echo "<br><br>";

echo "Differenza<br>";
$c=$a-$b;
echo $a ."-" .$b ."=".$c;
echo "<br><br>";

echo "Moltiplicazione<br>";
$c=$a*$b;
echo $a ."*" .$b ."=".$c;
echo "<br><br>";

echo "Divisione<br>";
$c=$a/$b;
echo $a ."/" .$b ."=".$c;
echo "<br><br>";

echo "<h2>Stampiamo nuovamente il valore di a: $a<br></h2>";
echo "Aumentiamo il suo valore di 1<br>";
$a++;
echo $a;
echo "<br><br>";

echo "Sottrai 2<br>";
$a-=2;
echo $a;
echo "<br><br>";

echo "Moltiplicalo x 10<br>";
$a*=10;
echo $a;
echo "<br><br>";

echo "Dividilo x 5<br>";
$a/=5;
echo $a;
echo "<br><br>";

echo "Incrementalo di 1<br>";
$a++;
echo $a;
echo "<br><br>";

echo "Decrementalo di 1<br>";
$a--;
echo $a;
echo "<br><br>";

echo "Esempio con l'acca<br>";
echo 'Esempio con l\'acca<br>';
echo 'Esempio con "l\'acca"<br>';

$nome = "andrea";
$cognome = "ardenti";
echo 'Ciao, sono ' .$nome .' ' .$cognome;
echo "<br>Ciao, sono $nome $cognome";
echo "<br><br>";

echo strlen($nome);
echo strpos ($nome, $nome);

echo ucwords ("casa");

echo "<br><br>";
$x = "essere";
$y = "è";

echo 'La questione ' .$y .': ' .$x .' o non ' .$x .', questa ' .$y .' la domanda da porsi';
echo "<br>";
echo "La questione $y: $x o non $x, questa $y la domanda da porsi.";

echo "<br><br>";

//creazione di una funzione.
//uso di una variabile globale in una funzione

$f = 10;
function sum ($d, $k) {  //creo la funzione passando due parametri
    return $d + $k;  //la funzione fa la somma dei due parametri
}
echo sum($f, 10); //mi richiamo la funzione passando come primo parametro la variabile globale, e come secondo paramentro un valore indicato al momento...

echo "<br><br>";

function makecoffee($types = array("cappuccino"), $coffeeMaker = NULL) {
    $device = is_null($coffeeMaker) ? "hands" : $coffeeMaker;
    return "Making a cup of " .join(", ", $types) ." with $device.\n";
}
echo makecoffee();
echo makecoffee(array("cappuccino", "lavazza"), "teapot");


?>
</body>
</html>