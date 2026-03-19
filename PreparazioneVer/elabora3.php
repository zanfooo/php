<?php

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    echo "ACCESSO NON VALIDO";
    exit();
}

// DATI DAL FORM
$nome = $_POST['nome'] ?? "";
$password = $_POST['password'] ?? "";
$email = $_POST['email'] ?? "";
$eta = $_POST['eta'] ?? "";
$sesso = $_POST['sesso'] ?? "";
$corsi = $_POST['corsi'] ?? [];
$citta = $_POST['citta'] ?? "";
$nazionalita = $_POST['nazionalita'] ?? [];
$area = $_POST['area'] ?? "";

// 🔐 DATABASE SIMULATO (ARRAY ASSOCIATIVO)
$utenti = [
    "nicolò" => password_hash("1234", PASSWORD_DEFAULT),
    "mario" => password_hash("abcd", PASSWORD_DEFAULT)
];

// 🔎 VERIFICA LOGIN
$login = false;

if (isset($utenti[$nome])) {
    if (password_verify($password, $utenti[$nome])) {
        $login = true;
    }
}

// 📊 DATI IN ARRAY ASSOCIATIVO
$dati = [
    "nome" => $nome,
    "email" => $email,
    "eta" => $eta,
    "sesso" => $sesso,
    "corsi" => $corsi,
    "citta" => $citta,
    "nazionalita" => $nazionalita,
    "area" => $area,
    "login" => $login ? "OK" : "ERRORE"
];

?>

<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Risultato</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>

<h2>
<?php 
echo $login ? "Login riuscito ✅" : "Credenziali errate ❌"; 
?>
</h2>

<table>
    <tr>
        <?php foreach ($dati as $chiave => $valore): ?>
            <th><?= htmlspecialchars($chiave) ?></th>
        <?php endforeach; ?>
    </tr>

    <tr>
        <?php foreach ($dati as $valore): ?>
            <td>
                <?php
                if (is_array($valore)) {
                    echo htmlspecialchars(implode(", ", $valore));
                } else {
                    echo htmlspecialchars($valore);
                }
                ?>
            </td>
        <?php endforeach; ?>
    </tr>
</table>

</body>
</html>
