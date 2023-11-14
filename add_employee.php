<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dodanie pracownika</title>
    <style>
       .powrot{
        float:right;
    margin-right:20%;
    background: green;
    color:red;
    padding: 20px;
    text-decoration: none;
       }
    </style>
</head>

<body>
    <form action="add_employee.php" method="post">
        <label for="imie">Imię: </label>
        <input type="text" id="imie" name="imie"><br><br>

        <label for="nazwisko">Nazwisko: </label>
        <input type="text" id="nazwisko" name="nazwisko"><br><br>

        <label for="wynagrodzenie">Wynagrodzenie: </label>
        <input type="text" id="wynagrodzenie" name="wynagrodzenie"><br><br>

        <label for="stanowisko">Stanowisko: </label>
        <input type="text" id="stanowisko" name="stanowisko"><br><br>

        <input type="submit" onclick="" value="AKCEPTUJ">

    </form>
    <a href="index.html" class="powrot">powrot</a>
    <?php
    $zmiennaA = mysqli_connect("localhost", "root", "", "erpdatabase");
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["imie"]) && isset($_POST["nazwisko"]) && isset($_POST["stanowisko"]) && isset($_POST["wynagrodzenie"])) {
        $imie = $_POST["imie"];
        $nazwisko = $_POST["nazwisko"];
        $stanowisko = $_POST["stanowisko"];
        $wynagrodzenie = $_POST["wynagrodzenie"];
        $zapytanie = "INSERT into employees(stanowisko,wynagrodzenie,imie,nazwisko) values ('$stanowisko','$wynagrodzenie','$imie','$nazwisko')";
        $wysylanie = mysqli_query($zmiennaA, $zapytanie);

        echo "Do dodany klient:" . "<br>";
        echo "imie: " . $imie . "<br>";
        echo "nazwisko: " . $nazwisko . "<br>";
        echo "e-mail: " . $wynagrodzenie . "<br>";
        echo "adres: " . $stanowisko . "<br>";

        $obecna_data= date("Y-m-d H:i:s");
        $dodanie_daty="INSERT INTO historia (czas,czynnosc) VALUES ('$obecna_data','Dodanie pracownika')";
        $wysylanie2 = mysqli_query($zmiennaA, $dodanie_daty);
        echo "Akcja została dodana do histori.";
    }

    mysqli_close($zmiennaA);
    ?>

</body>

</html>