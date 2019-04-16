<!DOCTYPE HTML>
<html>
<head>
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: archimede
 * Date: 20/06/2018
 * Time: 12:19
 */

if (count($_GET)>0) {
    $nameErr = $num1 = $num2 = "";
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
} else {
    echo "non sto ricevendo parametri";
}


echo "<br>";
echo "--- INIZIO DELLE FUNZIONI ---";
echo "<br><br>";
//PUNTO PRIMO E PUNTO SECONDO
echo "<br>";
echo "--- Restituzione di num1 e num2 ---";
echo "<br><br>";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (empty ($_GET["num1"])) {
        $nameErr = "Un numero è richiesto";
    } else {
        $num1 = $_GET["num1"];
        $num1 = (int)filter_var($num1, FILTER_SANITIZE_NUMBER_INT);
        if($num1 > 0) {
            echo "Il valore di num1 è: " . $num1;
        } else {
            echo "<br>";
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (empty ($_GET["num2"])) {
        $nameErr = "Un numero è richiesto";
    } else {
        $num2 = $_GET["num2"];
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
    if ($num1 & 1 AND $num1 > 0){
        return "Il numero è dispari";
    }
    return "";
}

echo "<br>Risultato funzione somma: " . somma($num1,$num2);
echo "<br>Risultato funzione sottrazione: " . sottrazione($num1,$num2);
echo "<br>Risultato funzione moltiplicazione: " . moltiplicazione($num1,$num2);
echo "<br>Risultato funzione divisione: " . divisione($num1,$num2);
echo "<br>";
echo "<br>Risultato funzione maggiore: " . maggiore($num1,$num2);
echo "<br>Risultato funzione minore: " . minore($num1,$num2);
echo "<br>";
echo "<br>" . dispari($num1);
echo "<br><br>";

?>

<form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Inserisci il primo valore: <input type="num1" name="num1" value="<?php echo $num1;?>">
    Inserisci il secondo valore: <input type="num2" name="num2" value="<?php echo $num2;?>">
    <br><br>
    <input type="submit" name="submit" value="Submit">
    <span class="error"><?php echo $nameErr;?></span>
</form>
</body>
</html>