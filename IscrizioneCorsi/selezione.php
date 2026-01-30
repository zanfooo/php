<?php
$num_corsi = $_POST['num_corsi'];

$corsi = [
    "Sistemi e reti", "Robotica", "Contabilità", "Meccatronica",
    "Chimica", "Statistica", "Matematica", "Informatica",
    "Marketing", "Economia Politica"
];

$docenti = [
    "Rossi Mario", "Bianchi Luca", "Verdi Anna", "Neri Paolo",
    "Gialli Sara", "Blu Marco", "Viola Elisa", "Ferrari Andrea"
];
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Selezione</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Selezione corsi e docenti</h1>

<form action="riepilogo.php" method="post">
    <input type="hidden" name="num_corsi" value="<?= $num_corsi ?>">

    <?php for ($i = 0; $i < $num_corsi; $i++): ?>
        <div class="section">
            <label>Corso</label>
            <select name="corso[]">
                <?php foreach ($corsi as $c): ?>
                    <option value="<?= $c ?>"><?= $c ?></option>
                <?php endforeach; ?>
            </select>

            <label>Docenti</label>
            <select name="docenti[<?= $i ?>][]" multiple size="4">
                <?php foreach ($docenti as $d): ?>
                    <option value="<?= $d ?>"><?= $d ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    <?php endfor; ?>

    <button type="submit">Invia</button>
</form>

</body>
</html>