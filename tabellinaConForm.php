<!DOCTYPE HTML>
<html>
<head>
</head>
<body>


<?php

$nameErr = $number = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty ($_POST["number"])) {
        $nameErr = "Un numero è richiesto";
    } else {
        $number = $_POST["number"];
        $number = (int)filter_var($number, FILTER_SANITIZE_NUMBER_INT);
        if(is_int($number)) {
            for ($i=1; $i<=10; $i++){
                echo "<br> $number * $i =" . $number * $i;
            }
        }

    }
}

?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Inserisci il numero: <input type="number" name="number" value="<?php echo $number;?>">
    <br><br>
    <input type="submit" name="submit" value="Submit">
    <span class="error"><?php echo $nameErr;?></span>
</form>
</body>
</html>
