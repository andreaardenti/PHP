<!DOCTYPE html>
<html>
<head>
    <title>Metodo GET</title>
</head>
<body>
<form method="get" action="search2.php">
    <input name="person[0][first_name]" value="john"/>
    <input name="person[0][first_name]" value="smith"/>
    <input name="person[1][last_name]" value="jane"/>
    <input name="person[1][last_name]" value="jones"/>
    <input type="submit" value="Invia" />
    <input type="reset" value="Resetta" />
</form>
</body>
</html>