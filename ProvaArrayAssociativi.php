<?php

/* creo degli array per i test */
$team = ["CEO" => "Laura", "CTO" => "Marco", "Designer" => "Giulia"];
$numbers = [1, 2, 3, 4];
$items = [10, 20, 30, 40];

/* 1. array_keys() — restituisce tutte le chiavi dell’array */
echo "1) array_keys()\n";
print_r(array_keys($team));
echo "\n";

/* 2. array_values() — restituisce tutti i valori dell’array */
echo "2) array_values()\n";
print_r(array_values($team));
echo "\n";

/* 3. array_key_exists() — controlla se una certa chiave è presente nell’array */
echo "3) array_key_exists('CTO')\n";
var_dump(array_key_exists("CTO", $team));
echo "\n";

/* 4. isset() — verifica se una chiave esiste e non è null */
echo "4) isset(\$team['CEO'])\n";
var_dump(isset($team["CEO"]));
echo "\n";

/* 5. in_array() — verifica se un certo valore è presente nell’array */
echo "5) in_array('Giulia')\n";
var_dump(in_array("Giulia", $team));
echo "\n";

/* 6. array_search() — trova e restituisce la chiave collegata a un certo valore */
echo "6) array_search('Marco')\n";
print_r(array_search("Marco", $team));
echo "\n";

/* 7. unset() — elimina un elemento dall’array */
echo "7) unset() su 'Designer'\n";
$team2 = $team;
unset($team2["Designer"]);
print_r($team2);
echo "\n";

/* 8. array_merge() — unisce due o più array in un unico arrayt */
echo "8) array_merge()\n";
$a = ["brand" => "Vega"];
$b = ["target" => "ragazze"];
print_r(array_merge($a, $b));
echo "\n";

/* 9. asort() — ordina l’array in base ai valori, in ordine crescente, mantenendo le chiavi */
echo "9) asort() valori crescenti\n";
$skills = ["Laura" => 4, "Marco" => 5, "Giulia" => 3];
asort($skills);
print_r($skills);
echo "\n";

/* 10. arsort() — come sopra, ma in ordine decrescente */
echo "10) arsort() valori decrescenti\n";
arsort($skills);
print_r($skills);
echo "\n";

/* 11. ksort() — ordina l’array in base alle chiavi, dalla A alla Z */
echo "11) ksort()\n";
ksort($team);
print_r($team);
echo "\n";

/* 12. krsort() — ordina in base alle chiavi, ma dalla Z alla A */
echo "12) krsort()\n";
krsort($team);
print_r($team);
echo "\n";

/* 13. array_map() — applica una funzione a tutti gli elementi dell’array e restituisce un nuovo array modificato */
echo "13) array_map() raddoppio valori\n";
$result = array_map(fn($n) => $n * 2, $numbers);
print_r($result);
echo "\n";

/* 14. array_filter() — filtra l’array e tiene solo gli elementi che rispettano una certa condizione */
echo "14) array_filter() valori > 2\n";
$filtered = array_filter($numbers, fn($n) => $n > 2);
print_r($filtered);
echo "\n";

/* 15. array_walk() — modifica ogni elemento dell’array “sul posto”, uno alla voltat */
echo "15) array_walk() format output\n";
$walkNumbers = $numbers;
array_walk($walkNumbers, function (&$n) {
    $n = "Valore: $n";
});
print_r($walkNumbers);
echo "\n";

/* 16. array_slice() — estrae una parte dell’array senza modificarlo */
echo "16) array_slice() estrazione [1,2]\n";
print_r(array_slice($numbers, 1, 2));
echo "\n";

/* 17. array_splice() — rimuove e/o sostituisce elementi dentro l’array, modificandolo */
echo "17) array_splice() rimozione e sostituzione\n";
$items2 = $items;
array_splice($items2, 1, 2, ["X"]);
print_r($items2);
echo "\n";
