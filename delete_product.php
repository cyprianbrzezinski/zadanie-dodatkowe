<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Usuniecie produktu</title>
    <style>
        .powrot {
            float: right;
            margin-right: 20%;
            background: green;
            color: red;
            padding: 20px;
            text-decoration: none;
        }

        div {
            width: 40%;
            float: left;
        }
    </style>
</head>

<body>
    <div>
        <form action="delete_product.php" method="post">
            <label for="nazwa">Nazwa: </label>
            <input type="text" id="nazwa" name="nazwa" required><br><br>

            <label for="opis">opis: </label>
            <input type="text" id="opis" name="opis" required><br><br>

            <label for="Dostepnosc">Dostepnosc: </label>
            <input type="number" id="Dostepnosc" name="Dostepnosc" required><br><br>

            <label for="cena">cena: </label>
            <input type="number" id="cena" name="cena" required><br><br>

            <input type="submit" onclick="" value="Usun">

        </form>
        <a href="index.html" class="powrot">powrot</a>
        <?php
        $zmiennaA = mysqli_connect("localhost", "root", "", "erpdatabase");
        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["nazwa"]) && isset($_POST["opis"]) && isset($_POST["Dostepnosc"]) && isset($_POST["cena"])) {
            $nazwa = $_POST["nazwa"];
            $opis = $_POST["opis"];
            $Dostepnosc = $_POST["Dostepnosc"];
            $cena = $_POST["cena"];
            $zapytanie = "DELETE FROM products WHERE nazwa='$nazwa' AND opis='$opis' AND cena='$cena' AND Dostepnosc='$Dostepnosc'";
            $check=mysqli_query($zmiennaA,$zapytanie);

            echo "Usuniety produkt:" . "<br>";
            echo "nazwa: " . $nazwa . "<br>";
            echo "opis: " . $opis . "<br>";
            echo "Dostepnosc: " . $Dostepnosc . "<br>";
            echo "cena: " . $cena . "<br>";

            $obecna_data = date("Y-m-d H:i:s");
            $dodanie_daty = "INSERT INTO historia (czas,czynnosc) VALUES ('$obecna_data','Usuniecie produktu ')";
            $wysylanie2 = mysqli_query($zmiennaA, $dodanie_daty);
            echo "Akcja została dodana do histori.";
        }

        mysqli_close($zmiennaA);
        ?>
    </div>
    <div>
        <?php
        $zmiennaB = mysqli_connect("localhost", "root", "", "erpdatabase");
        $sprawdzanie = "Select nazwa, opis, cena, Dostepnosc from products";
        $wysylanie = mysqli_query($zmiennaB, $sprawdzanie);
        echo "<ol>";
        while ($pobieranie = mysqli_fetch_array($wysylanie)) {
            echo "<li>";
            echo $pobieranie["nazwa"]." ".$pobieranie["opis"]." ".$pobieranie["Dostepnosc"]." ".$pobieranie["cena"];
            echo "</li>";
        }
        echo "</ol>"
        ?>
    </div>

</body>

</html>