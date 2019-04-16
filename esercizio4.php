<?php

$tempo = "sole";
$temperatura = "freddo";
if ($tempo == "piove"){

    if(temperatura == "freddo"){
        echo "resto a casa";
    }else{
        echo "vado al bar";
    }

}echo "vado al parco";

echo"<br>";

if ($tempo=="piove" && $temperatura=="freddo") {
    echo "resto a casa";
}else{
        if ($tempo == "sole" && $temperatura == "freddo")
        {
            echo "vado al bar";
        }else echo "vado al parco";
    }

echo"<br>";

switch($tempo){
    case 'piove': echo "resto a casa";break;
    case 'sole': echo "vado al parco";break;
    default: echo "vado al bar";
}

echo"<br>";

for($moltiplicatore=0;$moltiplicatore<=10;$moltiplicatore++) {
    $risultato = 3 * $moltiplicatore;
    echo "3*$moltiplicatore" . "=" . "$risultato" . "<br>";
}
echo"<br>";

$moltiplicatore=0;
while($moltiplicatore<=10){
    $risultato = 5* $moltiplicatore;
    echo "5*$moltiplicatore" . "=" . "$risultato" . "<br>";

    $moltiplicatore++;
}
echo"<br>";

$vettore_a= array(2,5,7,9,11);
$vettore_b= array(2,"pippo",true,1.24,array(1,2,3));
$vettore_c= array(0=>2,1=>"pippo",2=>true);
$vettore_d[0]=2;
$vettore_d[1]="pippo";

print_r($vettore_a);echo"<br>";
print_r($vettore_b);echo"<br>";
print_r($vettore_c);echo"<br>";
print_r($vettore_d);echo"<br>";

unset($vettore_a[3]);
print_r($vettore_a);echo"<br>";

$hash_a=array("italia"=>"roma","francia"=>"parigi","spagna"=>"madrid",12=>"pippo");
print_r($hash_a);echo"<br>";
echo $hash_a['italia'];
//echo $hash_a[0];//non mi da nulla perche 0 non è la posiziione ma la chiave.e non esiste nessuna chiave che si chiama 0
echo"<br>";

$partecipanti=['simo','ire','marghe','piero','desi'];
echo count($partecipanti);//numero elementi di un vettore
echo"<br>";


if(in_array('ire',$partecipanti)){
    echo "ire partecipa";
}
else {
    echo "ire non partecipa";
}
echo"<br>";
shuffle($partecipanti);
print_r($partecipanti);
echo"<br>";
sort($partecipanti);
print_r($partecipanti);
echo"<br>";
$riordino=array_reverse($partecipanti);
print_r($riordino);
echo"<br>";
$partecipanti_A =['simo','ire','marghe','piero','desi'];
$partecipanti_B =['simo','ire','marghe','piero','desi'];
$partecipanti_C =['simo','ire','marghe','piero','desi'];
$tot=array_merge($partecipanti_A,$partecipanti_B,$partecipanti_C);
print_r($tot);
echo"<br>";
?>