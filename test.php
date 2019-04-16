<?php
$var = "variabile locale";
function prova() {
    global $var;
    echo $var; // variabile  riconosciuta all'interno della funzione perchè dichiarata globale
}
?>


Spiegare la differenza tra la richiesta GET ed una richiesta POST.
GET e POST si usano per "passare" i dati di un form al server per successiva elaborazione. Con GET i dati passati sono visibili nella barra degli indirizzi. Con POST i dati non vengono visualizzati.
Quali tipologie di scope esistono in PHP? Fare degli esempio pratici con degli script PHP
Esistono Variabili locali, variabili globali e variabili super-globali

<?php
$var = "variabile locale";
function prova() {
    echo $var; // variabile non riconosciuta all'interno della funzione
}
?>

<?php
$var = "variabile locale";
function prova() {
    global $var;
    echo $var; // variabile  riconosciuta all'interno della funzione perchè dichiarata globale
}
?>
Spiegare come funziona un interprete. Indicare dei linguaggi di programmazione che sono interpretati.
L'interprete si occupa di tradurre il codice sorgente in codice eseguibile (interpretato) da un browser. Linguaggi interpretati sono ad esempio: PHP, Java, Python...
Spiegare cosa sono: server e client e le maggiori caratteristiche. Descrivere degli esempi pratici sia del client che del server.
Server è un computer che si occupa di elaborare i dati inviati da altri computer. Client è un software che si occupa di inviare i dati al computer server.
Cosa si intende quando ci riferiamo al PHP come linguaggio non fortemente tipizzato. È comunque possibile eseguire delle conversioni tra variabili(fare un esempio)?.
Non tipizzato vuol dire che non esiste un tipo specifico per una variabile, e si può passare ad una stessa variabile diversi tipi di dato. è comunque possibile fare una conversione tra variabili, ad esempio, assegno prima alla variabile $num il valore 7 ($num=7), e poi ne faccio la sua conversione in stringa --> $num="7"
Che cosa si intende per indirizzo IP? A cosa si riferisce il termine localhost. E a cosa serve indicare la porta quando scriviamo localhost:8888 o localhost:80
Un indirizzo IP è l'indirizzo "fisico" di un computer (es.: 218.94.25.147) ovvero come esso è rintracciabile all'interno di una rete (locale o esterna).
Localhost fa riferimento ad un server locale dove è possibile ad esempio far eseguire (interpretare) le pagine php e mandarle compilate al browser. La porta, 80 o 8080 è la porta di comunicazione con il server.
Che cosa è lo Scope di una variabile?
Lo scope è la visibilità di una variabile all'interno del codice. es: una variabile dichiarata nel codice principale non è visibile dentro una funzione. Viceversa, una variabile dichiarata dentro una funzione non è visibile all'esterno di essa.
Quali sono i vantaggi di utilizzare PHP?
PHP ha tutte le caratteristiche di un linguaggio compilato c-like, ma viene eseguito su una macchina server, compilato, e restituito sotto forma di linguaggio di markup al browser. La comodità è che il codice sorgente non verrà mai visualizzato dai client.
Che cosa è un Web Server? Quali web server conosci.
Web server è una applicazione che gestisce le varie chiamate dai client, e restituisce il risultato richiesto (la pagina web, la web app....)
Spiegare come funziona un compilatore. Indicare dei linguaggi di programmazione che sono compilati.
Un compilatore esegue e traduce il codice sorgente in linguaggio macchina eseguibile. La sua comodità sta nel non dover essere ricompilato ogni volta che deve essere eseguito in quanto già tradotto. Linguaggi compilati sono: C, C++, Visual Basic, etc...
