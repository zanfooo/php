<?php
$var = 10;
$num = 11;
$pos = "numero positivo";
$neg = "numero negativo";
$materie = ["Informatica", "Sistemi e Reti", "Tpsi", "Gpoi"];
$message = "ciao sono su js";

$studenti = [
    [
        'nome' => 'Andrea',
        'cognome' => 'Pirlo',
        'media' => 7
    ],
    [
        'nome' => 'Francesco',
        'cognome' => 'Totti',
        'media' => 9
    ],
    [
        'nome' => 'Paulo',
        'cognome' => 'Dybala',
        'media' => 6
    ]
];
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>WebApp</title>
    <link rel="stylesheet" href="myStyle.css">
</head>
<body>

<p>ciao sono sull'html</p>

<div>
    <p>
        <?php echo $var; ?><br>
        <?= $var; ?>
    </p>
</div>

<?php if ($num > 0): ?>
    <h1><?= $pos; ?></h1>
<?php else: ?>
    <h1><?= $neg; ?></h1>
<?php endif; ?>

<?php foreach ($materie as $item): ?>
    <p><?= $item; ?></p>
    <hr>
<?php endforeach; ?>

<p><?= $studenti[0]['nome']; ?></p>

<button id="mybutton">PREMI</button>

<script src="myScript.js"></script>

<script>
    const message = <?= json_encode($message); ?>;
</script>

<ol>
    <?php foreach ($studenti as $studente): ?>
        <li>
            <?php foreach ($studente as $chiave => $valore): ?>
                <strong><?= $chiave ?>:</strong> <?= $valore ?><br>
            <?php endforeach; ?>
        </li>
    <?php endforeach; ?>
</ol>

<table class="studenti">
    <thead>
    <tr>
        <th>Nome</th>
        <th>Cognome</th>
        <th>Media</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $i = 0;
    $tot = count($studenti);

    while ($i < $tot):
        ?>
        <tr>
            <td><?= $studenti[$i]['nome']; ?></td>
            <td><?= $studenti[$i]['cognome']; ?></td>
            <td class="<?= $studenti[$i]['media']?>">
                <?= $studenti[$i]['media']; ?>
            </td>
        </tr>
        <?php
        $i++;
    endwhile;
    ?>
    </tbody>
</table>
<br>
<footer class="footer">
    <p>&copy; 2026 - Sito di esempio</p>
    <p>
        Realizzato da <strong>Zanfo</strong>
    </p>
</footer>
</body>
</html>
