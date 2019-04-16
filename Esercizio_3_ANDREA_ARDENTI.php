<!DOCTYPE HTML>
<html>
<head>
</head>
<body>

<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
?>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Inserisci il primo valore: <input type="num1" name="num1" value="<?php echo $num1;?>">
    Inserisci il secondo valore: <input type="num2" name="num2" value="<?php echo $num2;?>">
    <input type="radio" name="funzione" value="somma">Somma
    <input type="radio" name="funzione" value="sottrazione">Sottrazione
    <input type="submit" name="submit" value="Submit">
</form>

<?php

$nameErr = $num1 = $num2 = $sumFine = "";

echo "<br>";
echo "--- INIZIO DELLE FUNZIONI ---";
echo "<br><br>";
//PUNTO PRIMO E PUNTO SECONDO
echo "<br>";
echo "--- Restituzione di num1 e num2 ---";
echo "<br><br>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty ($_POST["num1"])) {
        $nameErr = "Un numero è richiesto";
    } else {
        $num1 = $_POST["num1"];
        $num1 = (int)filter_var($num1, FILTER_SANITIZE_NUMBER_INT);
        if($num1 > 0) {
            echo "Il valore di num1 è: " . $num1;
        } else {
            echo "<br>";
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty ($_POST["num2"])) {
        $nameErr = "Un numero è richiesto";
    } else {
        $num2 = $_POST["num2"];
        $num2 = (int)filter_var($num2, FILTER_SANITIZE_NUMBER_INT);
        if($num2 < 0) {
            echo "<br>Il valore di num2 è: " . $num2;
        } else {
            echo "<br>";
        }
    }
}
echo "<br>";

//PUNTO TERZO
// NOTA PER IL PROF. NON SONO RIUSCITO A DUPLICARE SU TUTTE LE FUNZIONI

if (empty($_POST["funzione"])){
    $nosomma = "Spiacente, seleziona";
} else {
    $sumFine = somma($num1, $num2);
    echo $sumFine;
}

function somma ($num1, $num2) {
    $sum = $num1 + $num2;
    return $sum;
}


//PUNTO QUARTO
function sottrazione ($num1, $num2) {
    $sum = $num1 - $num2;
    return $sum;
}

//PUNTO QUINTO
function moltiplicazione ($num1, $num2) {
    $sum = $num1 * $num2;
    return $sum;
}

//PUNTO SESTO
function divisione ($num1, $num2) {
    $sum = $num1 / $num2;
    return $sum;
}

//PUNTO SETTIMO
function maggiore ($num1, $num2) {
    if ($num1>$num2){
        return $num1;
    }
    return "$num2";
}

//PUNTO OTTAVO
function minore ($num1, $num2) {
    if ($num1<$num2){
        return $num1;
    }
    return "$num2";
}

//PUNTO NONO
function dispari ($num1) {
    if ($num1 & 1){
        return "Il numero è dispari";
    }
    return "Il numero non è dispari";
}

echo "<br>Risultato funzione somma: " . $sumFine;
echo "<br>Risultato funzione sottrazione: " . sottrazione($num1,$num2);
//echo "<br>Risultato funzione moltiplicazione: " . moltiplicazione($num1,$num2);
//echo "<br>Risultato funzione divisione: " . divisione($num1,$num2);
//echo "<br>";
//echo "<br>Risultato funzione maggiore: " . maggiore($num1,$num2);
//echo "<br>Risultato funzione minore: " . minore($num1,$num2);
//echo "<br>";
//echo "<br>Risultato funzione dispari: " . dispari($num1) . " " . $num1;
//echo "<br><br>";

?>



</body>
</html>