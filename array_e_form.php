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

$nameErr = $citta = "";

echo "<br>";
echo "--- Citta Italiane ---";
echo "<br><br>";

$arrayCitta = ["Roma", "Milano", "Palermo", "Napoli", "Bologna", "Foggia", "Latina", "Brescia"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty ($_POST["citta"])) {
        $nameErr = "Almeno una citta e richiesta";
    } else {
        $citta = $_POST["citta"];
        $arrayUtente = explode (",", $citta);
        $arrayFinale = array_merge($arrayCitta,$arrayUtente);
        foreach ($arrayFinale as $value) {
            echo "• " . $value . "<br><br>" ;
        }
    }
} else {
    foreach ($arrayCitta as $value) {
        echo "• " . $value . "<br><br>" ;
    }
}

?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Inserisci una o piu citta: <input type="text" name="citta" value="<?php echo $citta;?>">
    <br><br>
    <input type="submit" name="submit" value="Submit">
    <span class="error"><?php echo $nameErr;?></span>
</form>
</body>
</html>

