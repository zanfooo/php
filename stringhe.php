<?php
# creo delle stringhe per i test
$s1 = 'prima';
$s2 = 'seconda';
$s3 = 'terza';
$s4 = 'QUARTA';
$vets = ['casa', 'Paolo', 'vita', 'Matteo', 'sedia'];
$frase = 'Sono andato al parco con Luigi';
$s1space = '  primaspace  ';

# strlen() – Restituisce la lunghezza di una stringa
echo 'strlen()', '<br>';
$lunghezza = strlen($s1);
echo $lunghezza, '<br>','<br>';

# strrev() – Inverte una stringa
echo 'strrev()', '<br>';
$s1invertita = strrev($s1);
echo $s1invertita, '<br>','<br>';

# strtolower() – Converte una stringa in minuscolo
echo 'strtolower()', '<br>';
$s4min = strtolower($s4);
echo $s4min, '<br>','<br>';

# strtoupper() – Converte una stringa in maiuscolo
echo 'strtoupper()', '<br>';
$s1max = strtoupper($s1);
echo $s1max, '<br>','<br>';

# ucfirst() – Converte in maiuscola la prima lettera della stringa
echo 'ucfirst()', '<br>';
$s2pm = ucfirst($s2);
echo $s2pm, '<br>','<br>';

# ucwords() – Converte in maiuscola la prima lettera di ogni parola
echo 'ucwords()', '<br>';
$fraseucw = ucwords($frase);
echo $fraseucw, '<br>','<br>';

# trim() – Rimuove spazi (o caratteri) all'inizio e alla fine
echo 'trim()', '<br>';
$s1nospace = trim($s1space);
echo $s1nospace, '<br>','<br>';

# ltrim() – Rimuove spazi (o caratteri) all'inizio
echo 'ltrim()', '<br>';
$s1nospace2 = ltrim($s1space);
echo $s1nospace2, '<br>','<br>';

# rtrim() – Rimuove spazi (o caratteri) alla fine
echo 'rtrim()', '<br>';
$s1nospace3 = rtrim($s1space);
echo $s1nospace3, '<br>','<br>';

# explode() – Divide una stringa in array usando un delimitatore
echo 'explode()', '<br>';
$fraseesplosa = explode($frase, 5);
var_dump($fraseesplosa);
echo '<br>','<br>';

# implode() – Unisce un array in una stringa con un delimitatore
echo 'implode()', '<br>';
$fraseimplosa = implode($vets);
echo $fraseimplosa, '<br>','<br>';

# str_replace() – Sostituisce parti di stringa con altre
echo 'str_replace()', '<br>';
$news = str_replace('Luigi', $frase, 'Lucia');
echo $news, '<br>','<br>';

# substr() – Restituisce parte di una stringa
echo 'substr()', '<br>';
$parte = substr($s1, -2);
echo $parte, '<br>','<br>';

# strpos() – Trova la prima occorrenza di una sottostringa
echo 'strpos()', '<br>';
$ricercata = strpos($frase, 'parco', 0);
echo $ricercata, '<br>','<br>';

# strrpos() – Trova l’ultima occorrenza di una sottostringa
echo 'strrpos()', '<br>';
$ricercata2 = strrpos($frase, 'parco', 0);
echo $ricercata2, '<br>','<br>';

# strstr() – Restituisce la parte della stringa a partire da una sottostringa (case-sensitive)
echo 'strstr()', '<br>';
$partes = strstr($frase, 'andato');
echo $partes, '<br>','<br>';

# stristr() – Come strstr() ma case-insensitive
echo 'stristr()', '<br>';
$parte2s = strstr($frase, 'andato');
echo $parte2s, '<br>','<br>';

# sprintf() – Restituisce una stringa formattata
$risultato = sprintf("Il totale è %.2f euro", 10.5);
echo $risultato, '<br>','<br>';

# printf() – Stampa una stringa formattata
echo 'printf()', '<br>';
printf("Il totale è %.2f euro", 10.5);
echo '<br>','<br>';

# number_format() – Formatta un numero con decimali e separatori
echo 'number_format()', '<br>';
$numero = 1234.5678;
#number_format(numero, decimali, separatore_decimali, separatore_migliaia)
echo number_format($numero, 2, ',', '.');
echo '<br>','<br>';

# addslashes() – Aggiunge backslash ai caratteri che necessitano escaping
echo 'addslashes()', '<br>';
$backfrase = addslashes($frase);
echo $backfrase, '<br>','<br>';

# stripslashes() – Rimuove backslash aggiunti da addslashes()
echo 'stripslashes()', '<br>';
$removed = stripslashes($backfrase);
echo $backfrase;
