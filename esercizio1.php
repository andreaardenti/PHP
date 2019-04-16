<html>
<head>
    <title>Hello World ....in php</title>
</head>
    <body>
        <?php
        /**
         * Created by PhpStorm.
         * User: archimede
         * Date: 11/05/2018
         * Time: 12:31
         */

        // phpinfo();

        echo "<h1>Hello World</h1>";

        $a=9.2;
        $b=10.4;
        $c=$a*$b;

        echo $c;

        echo "<h1>Hello World 2</h1>";

        $vero=TRUE;
        $falso=FALSE;

        echo "Vero: ".$vero; // stampa la scritta Vero: e la concatena col punto al risultato della variabile $vero.
        echo "<br>";

        $a=9;
        $b=4;

        echo isset($a);

        echo "<br>";
        function verifyVar($a, $b)
        {
            echo "Variabile a: ".$a;
            echo "<br>";
            echo "Variabile b: ".$b;
        }

        verifyVar(1,1);
        echo "<br>";
        echo "<br>";
        echo $a;
        echo "<br>";
        echo $b;
        echo "<br>";
        echo "<br>";

        echo "-------   ESERCIZIO CONTATORE ++   -------------";

        echo "<br>";
        echo "Valore di contatore prima dell'incremento: ".$contatore = 0;
        echo "<br>";
        echo $contatore++;
        echo "<br>";
        echo "Valore di contatore dopo l'incremento: ".$contatore;
        echo "<br>";
        echo "<br>";

        echo "-------   ESERCIZIO CONTATORE ++   -------------";

        echo "<br>";
        echo "Valore di contatore prima dell'incremento: ".$contatore = 0;
        echo "<br>";
        echo ++$contatore;
        echo "<br>";
        echo "Valore di contatore dopo l'incremento: ".$contatore;
        echo "<br>";
        echo "<br>";
        ?>
    </body>
</html>