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

        section {
            width: 40%;
            float: left;
        }
        td{
            padding: 5px;
            border: 1px solid purple;
        }
    </style>
</head>

<body>
    <section>
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
    </section>
    <section>
        <?php
        $zmiennaB = mysqli_connect("localhost", "root", "", "erpdatabase");
        $sprawdzanie = "Select nazwa, opis, cena, dostepnosc from products";
        $wysylanie = mysqli_query($zmiennaB, $sprawdzanie);
        echo "<table>";
        echo "<tr>";
        echo "<th>";
        echo "Nazwa";
        echo "</th>";
        echo "<th>";
        echo "Opis";
        echo "</th>";
        echo "<th>";
        echo "Cena";
        echo "</th>";
        echo "<th>";
        echo "Dostepnosc";
        echo "</th>";
        echo "</tr>";
        while ($pobieranie = mysqli_fetch_array($wysylanie)) {
            echo "<tr>";
            echo "<td>";
            echo $pobieranie["nazwa"];
            echo "</td>";
            echo "<td>";
            echo $pobieranie["opis"];
            echo "</td>";
            echo "<td>";
            echo $pobieranie["cena"];
            echo "</td>";
            echo "<td>";
            echo $pobieranie["dostepnosc"];
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>"
        ?>
    </section>

</body>

</html>