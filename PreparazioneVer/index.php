<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
</head>
<body>

<form action="elabora3.php" method="post">
    <h1>Login + Dati</h1>

    Nome: <input type="text" name="nome" required><br><br>
    Password: <input type="password" name="password" required><br><br>

    Email: <input type="email" name="email" required><br><br>
    Età: <input type="number" name="eta" required><br><br>

    Sesso:
    <input type="radio" name="sesso" value="maschio" required> Maschio
    <input type="radio" name="sesso" value="femmina"> Femmina <br><br>

    Corsi:
    <input type="checkbox" name="corsi[]" value="PHP"> PHP
    <input type="checkbox" name="corsi[]" value="Java"> Java
    <input type="checkbox" name="corsi[]" value="SQL"> SQL <br><br>

    Città:
    <select name="citta">
        <option value="Roma">Roma</option>
        <option value="Milano">Milano</option>
        <option value="Napoli">Napoli</option>
        <option value="Venezia">Venezia</option>
    </select><br><br>

    Nazionalità:
    <select name="nazionalita[]" multiple>
        <option value="Italiana">Italiana</option>
        <option value="Rumena">Rumena</option>
        <option value="Cinese">Cinese</option>
    </select><br><br>

    Note:
    <textarea name="area"></textarea><br><br>

    <button type="submit">Invia</button>
</form>

</body>
</html>
