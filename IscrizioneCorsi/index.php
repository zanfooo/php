<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Numero corsi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Attivazione corsi</h1>

<form action="selezione.php" method="post">
    <label>Numero di corsi da attivare (1–10)</label>
    <input type="number" name="num_corsi" min="1" max="10" required>

    <button type="submit">Continua</button>
</form>

</body>
</html>