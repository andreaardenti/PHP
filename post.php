<?php
/**
 * Created by PhpStorm.
 * User: archimede
 * Date: 19/06/2018
 * Time: 10:56
 */

print_r($_POST);

echo "<br>Prima del filtro";

echo "<br>Il valore di author è: " . $_POST['author'];
echo "<br>";
echo "<br>";

$author = $_POST['author'];
$author = filter_var($author, FILTER_SANITIZE_STRING);
echo "dopo il filtro: ".$author;
echo "<br>";
echo "<br>";

foreach ($_POST as $key => $value) {
    $value = filter_var($value, FILTER_SANITIZE_STRING);
    echo "Chiave: " . $key . "<br>" . "Valore: " . $value . " " . "<br>" . "<br>";
}

function validaEmail($email){
    return filter_var(filter_var($email, FILTER_SANITIZE_EMAIL), FILTER_VALIDATE_EMAIL);
}
if(validaEmail("<h1>email@@miaemail.com</h1>")){
    echo "indirizzo valido";
}else{
    echo "Indirizzo non valido";
}

?>

<html>
<head>
    <title>Siamo dentro il SEARCH</title>
</head>

<body>
<h2>Tramite il metodo POST ho ricevuto <?php  echo $author?> </h2>
</body>

</html>
