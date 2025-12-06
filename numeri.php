<?php

# creo dei valori numeri per i test
$n1 = -15.7;
$n2 = 3.2;
$n3 = 10;
$n4 = 25;
$n5 = 2.5;

# abs() – Valore assoluto
echo 'abs()', '<br>';
$ris = abs($n1);
echo $ris, '<br>','<br>';

# ceil() – Arrotonda per eccesso
echo 'ceil()', '<br>';
$ris = ceil($n2);
echo $ris, '<br>','<br>';

# floor() – Arrotonda per difetto
echo 'floor()', '<br>';
$ris = floor($n2);
echo $ris, '<br>','<br>';

# round() – Arrotonda al numero intero più vicino
echo 'round()', '<br>';
$ris = round($n1);
echo $ris, '<br>','<br>';

# mt_rand() – Numero casuale (Mersenne Twister)
echo 'mt_rand()', '<br>';
$ris = mt_rand(1, 100);
echo $ris, '<br>','<br>';

# rand() – Numero casuale
echo 'rand()', '<br>';
$ris = rand(1, 100);
echo $ris, '<br>','<br>';

# min() – Minimo tra i valori
echo 'min()', '<br>';
$ris = min($n1, $n2, $n3, $n4);
echo $ris, '<br>','<br>';

# max() – Massimo tra i valori
echo 'max()', '<br>';
$ris = max($n1, $n2, $n3, $n4);
echo $ris, '<br>','<br>';

# sqrt() – Radice quadrata
echo 'sqrt()', '<br>';
$ris = sqrt($n4);
echo $ris, '<br>','<br>';

# pow() – Potenza
echo 'pow()', '<br>';
$ris = pow(2, 3);
echo $ris, '<br>','<br>';

# intdiv() – Divisione intera
echo 'intdiv()', '<br>';
$ris = intdiv(17, 3);
echo $ris, '<br>','<br>';

# number_format() – Formatta numero
echo 'number_format()', '<br>';
$ris = number_format(1234.5678, 2, ',', '.');
echo $ris, '<br>','<br>';

# is_numeric() – Controlla se è numerico
echo 'is_numeric()', '<br>';
$ris = is_numeric("123.45");
echo $ris ? 'true' : 'false', '<br>','<br>';

# is_int() – Controlla se è intero
echo 'is_int()', '<br>';
$ris = is_int($n3);
echo $ris ? 'true' : 'false', '<br>','<br>';

# is_float() – Controlla se è float
echo 'is_float()', '<br>';
$ris = is_float($n2);
echo $ris ? 'true' : 'false', '<br>','<br>';

# intval() – Converte in intero
echo 'intval()', '<br>';
$ris = intval($n5);
echo $ris, '<br>','<br>';

# floatval() – Converte in float
echo 'floatval()', '<br>';
$ris = floatval("12.34");
echo $ris, '<br>','<br>';

# pi() – Restituisce il valore di π
echo 'pi()', '<br>';
$ris = pi();
echo $ris, '<br>','<br>';

# log() – Logaritmo naturale
echo 'log()', '<br>';
$ris = log($n4);
echo $ris, '<br>','<br>';

# exp() – Funzione esponenziale (e^x)
echo 'exp()', '<br>';
$ris = exp(3);
echo $ris, '<br>','<br>';


