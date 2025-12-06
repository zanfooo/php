<?php

echo 'Ciao mondo1';
echo '<br>';
$var=10;
echo 'il valore della variabile è ' .$var;
echo '<br>';
var_dump($var);
$var2=105.5;
echo 'il valore della variabile è ' .$var2;
echo '<br>';
var_dump($var2);
$var='ciao';
var_dump($var2);
echo '<br>';

echo PHP_INT_MAX;
echo PHP_INT_MIN;
if($var2>5)
    echo'confrontoeffettuato2';
else echo 'ciao';
echo 'br';

echo 'Dichiarazione vettore';
$vett=[];
$vett1=[10,20,30];
echo '<br>';
#echo phpinfo();

echo 'Visualizzo primo elemento';
echo$vett1[0];

echo 'Conteggio elementi del vettore';
$n=count($vett1);
echo $n;
echo '<br>';
for($i=0;$i<$n;$i++){
    echo $vett1[$i];
    echo '<br>';
}

echo 'Conteggio elementi del vettore con orint_r';
echo '<br>';
print_r($vett1);
echo '<br>';
var_dump($vett1);
echo '<br>';
$vett2=[10,20,30,'a','b'];
var_dump($vett2);
array_push($vett2, 50);
echo '<br>';
echo implode(" ",$vett2);
$vett2[]=60;
echo '<br>';
echo implode(" ",$vett2);
echo '<br>';

echo 'Aggiungo elemento alla fine';
array_pop($vett2);
echo '<br>';
echo implode(" ",$vett2);
echo '<br>';

echo 'Cancella elemento all inizio';
array_pop($vett2);
echo '<br>';
echo implode(" ",$vett2);
echo '<br>';

echo 'Controllo esistenza elemento contenuto nel vettore';
echo '<br>';
if(in_array(100, $vett2))
    echo 'il numero esiste';
else echo 'il numero non esiste nel vettore';
echo '<br>';

echo 'Ordino il vettore';
echo '<br>';
sort($vett2);
echo implode(" ",$vett2);
echo '<br>';

$studente =[
    'nome'=>"Marco",
    "eta"=>18
];

echo $studente["nome"];
echo '<br>';
echo $studente["eta"];
echo '<br>';

$studente["cognome"] = "Bianchi";
echo $studente['cognome'];
echo '<br>';

foreach ($studente as $chiave => $valore){
    echo "<br> $chiave: $valore";
}
echo "<br>";
# "Vettore associativo annidato"
echo "<br>";
$studenti=[
    "studente1"=>[
        "nome"=>"Gigi",
        "voto"=>7
    ]
,
    "studente2"=>[
        "nome"=>"Alex",
        "voto"=>8
    ]
    ,
    "studente3"=>[
        "nome"=>"Enrico",
        "voto"=>5
    ]
];

echo $studenti["studebte2"]["voto"];
echo "<br>";

if(array_key_exists("nome",$studente))
    echo "chiave trovata";
else echo "chiave non trovata";

$chiavi=array_keys($studente);
var_dump($chiavi);
echo "<br>";
$valori=array_keys($studente);
var_dump($valori);
echo "<br>";
echo $valori[1];

if(array_key_exists("eta",$studente)) {
    echo "chiave trovata";
    echo $studente ["eta"];
}
else
    echo "chiave non trovata";

echo next($studente);
$var1 = 5;
$var2 = 5;
$var4 = 0;
$var3 = "ciao";
echo "<br>";
if($var1===$var2)
    echo "sono uguali";
else echo "sono diversi";
echo "<br>";
if($var1==$var2)
    echo "sono uguali";
else echo "sono diversi";
echo "<br>";
if($var1==$var3)
    echo "sono uguali";
else echo "sono diversi";
echo "<br>";
if($var3==$var4)
    echo "sono uguali";
else echo "sono diversi";
echo "<br>";


isset($a); #restituisce false se la variabile non esiste o è null
if(isset($a))
    echo "esiste";
echo "<br>";

$var5 = null;
if(is_null($var5));

#operatore ternario
$x = 7;
$risultato_ternario = $x>6 ? 'ok' : 'no ok';
echo "<br>";
echo $risultato_ternario;
echo "<br>";

#operatore coalescing
$nome = '5F';
$risultato_coalescing = $nome ?? 'default';
echo "<br>";
echo $risultato_coalescing;
echo "<br>";

#operatore spaceship
$x = 11;
$y = 7;
echo $x<=>$y;

#DateTime()
$date = new DateTime();
echo '<br>',' data di oggi = '.$date->format('d/m/y H:i:s');


