<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Formularz Osobowy</title>
</head>
<body>

<form action="submit_form.php" method="POST">
    <fieldset>
        <legend>Informacje osobiste:</legend>

        <label for="name">Imię:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="surname">Nazwisko:</label>
        <input type="text" id="surname" name="surname" required><br><br>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="age">Wiek:</label>
        <input type="number" id="age" name="age" min="0"><br><br>

        Płeć:<br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Mężczyzna</label><br>

        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Kobieta</label><br><br>

        <label for="country">Kraj:</label>
        <select id="country" name="country">
            <option value="poland">Polska</option>
            <option value="united_states">Stany Zjednoczone</option>
            <option value="germany">Niemcy</option>
        </select><br><br>
    </fieldset>

    <button type="submit">Wyślij</button>
</form>

</body>
</html>
