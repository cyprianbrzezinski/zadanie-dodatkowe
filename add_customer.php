<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dodanie uzytkownika</title>
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
    <form action="add_customer.php" method="post">
        <label for="imie">Imię: </label>
        <input type="text" id="imie" name="imie"><br><br>

        <label for="nazwisko">Nazwisko: </label>
        <input type="text" id="nazwisko" name="nazwisko"><br><br>

        <label for="adres">Adres: </label>
        <input type="text" id="adres" name="adres"><br><br>

        <label for="e_mail">E-mail: </label>
        <input type="text" id="e_mail" name="e_mail"><br><br>

        <input type="submit" onclick="" value="AKCEPTUJ">

    </form>
    <a href="index.html" class="powrot">powrot</a>
    <?php
    $zmiennaA = mysqli_connect("localhost", "root", "", "erpdatabase");
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["imie"]) && isset($_POST["nazwisko"]) && isset($_POST["e_mail"]) && isset($_POST["adres"])) {
        $imie = $_POST["imie"];
        $nazwisko = $_POST["nazwisko"];
        $email = $_POST["e_mail"];
        $adres = $_POST["adres"];
        $zapytanie = "INSERT into customers(imie,nazwisko,e_mail,adres) values  ('$imie','$nazwisko','$email','$adres')";
        $wysylanie = mysqli_query($zmiennaA, $zapytanie);

        echo "Do dodany klient:" . "<br>";
        echo "imie: " . $imie . "<br>";
        echo "nazwisko: " . $nazwisko . "<br>";
        echo "e-mail: " . $email . "<br>";
        echo "adres: " . $adres . "<br>";

        $obecna_data= date("Y-m-d H:i:s");
        $dodanie_daty="INSERT INTO historia (czas,czynnosc) VALUES ('$obecna_data','Dodanie klienta')";
        $wysylanie2 = mysqli_query($zmiennaA, $dodanie_daty);
        echo "Akcja została dodana do histori.";
    }

    mysqli_close($zmiennaA);
    ?>

</body>

</html>