<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logowanie</title>
</head>

<body>
    <form method="POST">
        <label for="login">Logowanie</label><br>
        <input type="text" id="login" name="login"><br>
        <label for="login">Haslo</label><br>
        <input type="password" id="haslo" name="haslo"><br>
        <input type="submit">
    </form>
    <?php
    $zmiennaA = mysqli_connect("localhost", "root", "", "erpdatabase");

    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["login"]) && isset($_POST["haslo"])) {
        $login = $_POST["login"];
        $haslo = $_POST["haslo"];
        $zapytanie = "SELECT login, haslo FROM uzytkownicy WHERE login = '$login' AND haslo = '$haslo'";
        $wysylanie = mysqli_query($zmiennaA, $zapytanie);
        
        if (mysqli_num_rows($wysylanie) > 0) {
            echo "Zalogowano pomyślnie";
        } else {
            echo "Niepoprawny login lub hasło";
        }
    }

    mysqli_close($zmiennaA);
?>

</body>

</html>