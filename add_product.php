<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dodanie produktu</title>
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
    <form action="add_product.php" method="post">
        <label for="nazwa">Nazwa: </label>
        <input type="text" id="nazwa" name="nazwa"><br><br>

        <label for="opis">Opis: </label>
        <input type="text" id="opis" name="opis"><br><br>

        <label for="cena">cena: </label>
        <input type="text" id="cena" name="cena"><br><br>

        <label for="dostepnosc">Dostepnosc: </label>
        <input type="number" min="0" max="1" id="dostepnosc" name="dostepnosc"><br><br>

        <input type="submit" onclick="" value="AKCEPTUJ">

    </form>
    <a href="index.html" class="powrot">powrot</a>
    <?php
    $zmiennaA = mysqli_connect("localhost", "root", "", "erpdatabase");
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["nazwa"]) && isset($_POST["opis"]) && isset($_POST["dostepnosc"]) && isset($_POST["cena"])) {
        $nazwa = $_POST["nazwa"];
        $opis = $_POST["opis"];
        $dostepnosc = $_POST["dostepnosc"];
        $cena = $_POST["cena"];
        $zapytanie = "INSERT into products(cena,dostepnosc,nazwa,opis) values ('$cena','$dostepnosc','$nazwa','$opis') ";
        $wysylanie = mysqli_query($zmiennaA, $zapytanie);

        echo "Do dodany klient:" . "<br>";
        echo "nazwa: " . $nazwa . "<br>";
        echo "opis: " . $opis . "<br>";
        echo "cena: " . $cena . "<br>";
        echo "dostepnosc: " . $dostepnosc . "<br>";

        $obecna_data= date("Y-m-d H:i:s");
        $dodanie_daty="INSERT INTO historia (czas,czynnosc) VALUES ('$obecna_data','Dodanie produktu')";
        $wysylanie2 = mysqli_query($zmiennaA, $dodanie_daty);
        echo "Akcja została dodana do histori.";
    }

    mysqli_close($zmiennaA);
    ?>

</body>

</html>