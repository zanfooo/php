<?php

echo "=== SUITE DI TEST FUNZIONI ARRAY ===\n\n";

/* dataset di base */
$team = ["CEO" => "Laura", "CTO" => "Marco", "Designer" => "Giulia"];
$numbers = [1, 2, 3, 4];
$items = [10, 20, 30, 40];

/* 1. array_keys() — recupero delle chiavi per mapping ruoli */
echo "1) array_keys()\n";
print_r(array_keys($team));
echo "\n";

/* 2. array_values() — estrazione del payload dei valori */
echo "2) array_values()\n";
print_r(array_values($team));
echo "\n";

/* 3. array_key_exists() — verifica presidio chiave 'cto' nel dataset */
echo "3) array_key_exists('CTO')\n";
var_dump(array_key_exists("CTO", $team));
echo "\n";

/* 4. isset() — controllo disponibilità chiave 'ceo' */
echo "4) isset(\$team['CEO'])\n";
var_dump(isset($team["CEO"]));
echo "\n";

/* 5. in_array() — validazione presenza valore 'giulia' */
echo "5) in_array('Giulia')\n";
var_dump(in_array("Giulia", $team));
echo "\n";

/* 6. array_search() — individuazione indice logico associato a 'marco' */
echo "6) array_search('Marco')\n";
print_r(array_search("Marco", $team));
echo "\n";

/* 7. unset() — rimozione asset 'designer' per scenario what-if */
echo "7) unset() su 'Designer'\n";
$team2 = $team;
unset($team2["Designer"]);
print_r($team2);
echo "\n";

/* 8. array_merge() — consolidamento di due array per allineamento brand/target */
echo "8) array_merge()\n";
$a = ["brand" => "Vega"];
$b = ["target" => "ragazze"];
print_r(array_merge($a, $b));
echo "\n";

/* 9. asort() — ordinamento ascending su punteggi competenziali */
echo "9) asort() valori crescenti\n";
$skills = ["Laura" => 4, "Marco" => 5, "Giulia" => 3];
asort($skills);
print_r($skills);
echo "\n";

/* 10. arsort() — reordering discendente per prioritarizzazione skill */
echo "10) arsort() valori decrescenti\n";
arsort($skills);
print_r($skills);
echo "\n";

/* 11. ksort() — sorting chiavi per governance strutturata */
echo "11) ksort()\n";
ksort($team);
print_r($team);
echo "\n";

/* 12. krsort() — reverse sorting chiavi per alternative view */
echo "12) krsort()\n";
krsort($team);
print_r($team);
echo "\n";

/* 13. array_map() — trasformazione massiva raddoppio valori */
echo "13) array_map() raddoppio valori\n";
$result = array_map(fn($n) => $n * 2, $numbers);
print_r($result);
echo "\n";

/* 14. array_filter() — filtro selettivo valori > 2 per segmentazione */
echo "14) array_filter() valori > 2\n";
$filtered = array_filter($numbers, fn($n) => $n > 2);
print_r($filtered);
echo "\n";

/* 15. array_walk() — rewriting elementi per standardizzazione output */
echo "15) array_walk() format output\n";
$walkNumbers = $numbers;
array_walk($walkNumbers, function (&$n) {
    $n = "Valore: $n";
});
print_r($walkNumbers);
echo "\n";

/* 16. array_slice() — estrazione parziale per operazioni selettive */
echo "16) array_slice() estrazione [1,2]\n";
print_r(array_slice($numbers, 1, 2));
echo "\n";

/* 17. array_splice() — rimozione e sostituzione controllata degli elementi */
echo "17) array_splice() rimozione e sostituzione\n";
$items2 = $items;
array_splice($items2, 1, 2, ["X"]);
print_r($items2);
echo "\n";

echo "=== FINE TEST ===\n";