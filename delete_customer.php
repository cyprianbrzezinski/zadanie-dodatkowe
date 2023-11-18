<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> usuniecie uzytkownika</title>
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
    </style>
</head>

<body>
    <section>
        <form action="delete_customer.php" method="post">
            <label for="imie">Imię: </label>
            <input type="text" id="imie" name="imie" required><br><br>

            <label for="nazwisko">Nazwisko: </label>
            <input type="text" id="nazwisko" name="nazwisko" required><br><br>

            <label for="e_mail">E-mail: </label>
            <input type="text" id="e_mail" name="e_mail" required><br><br>

            <label for="adres">Adres: </label>
            <input type="text" id="adres" name="adres" required><br><br>

            <input type="submit" onclick="" value="Usun">

        </form>
        <a href="index.html" class="powrot">powrot</a>
        <?php
        $zmiennaA = mysqli_connect("localhost", "root", "", "erpdatabase");
        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["imie"]) && isset($_POST["nazwisko"]) && isset($_POST["e_mail"]) && isset($_POST["adres"])) {
            $imie = $_POST["imie"];
            $nazwisko = $_POST["nazwisko"];
            $email = $_POST["e_mail"];
            $adres = $_POST["adres"];
            $zapytanie = "DELETE FROM customers WHERE imie='$imie' AND nazwisko='$nazwisko' AND adres='$adres' AND e_mail='$email'";
            $check=mysqli_query($zmiennaA,$zapytanie);

            echo "Usuniety klient:" . "<br>";
            echo "imie: " . $imie . "<br>";
            echo "nazwisko: " . $nazwisko . "<br>";
            echo "e-mail: " . $email . "<br>";
            echo "adres: " . $adres . "<br>";

            $obecna_data = date("Y-m-d H:i:s");
            $dodanie_daty = "INSERT INTO historia (czas,czynnosc) VALUES ('$obecna_data','Usuniecie klienta klienta')";
            $wysylanie2 = mysqli_query($zmiennaA, $dodanie_daty);
            echo "Akcja została dodana do histori.";
        }

        mysqli_close($zmiennaA);
        ?>
    </section>
    <section>
    <?php
        $zmiennaB = mysqli_connect("localhost", "root", "", "erpdatabase");
        $sprawdzanie = "Select imie, nazwisko, adres, e_mail from customers";
        $wysylanie = mysqli_query($zmiennaB, $sprawdzanie);
        echo "<table>";
        echo "<tr>";
        echo "<th>";
        echo "Imie";
        echo "</th>";
        echo "<th>";
        echo "Nazwisko";
        echo "</th>";
        echo "<th>";
        echo "E-Mail";
        echo "</th>";
        echo "<th>";
        echo "Adres";
        echo "</th>";
        echo "</tr>";
        while ($pobieranie = mysqli_fetch_array($wysylanie)) {
            echo "<tr>";
            echo "<td>";
            echo $pobieranie["imie"];
            echo "</td>";
            echo "<td>";
            echo $pobieranie["nazwisko"];
            echo "</td>";
            echo "<td>";
            echo $pobieranie["e_mail"];
            echo "</td>";
            echo "<td>";
            echo $pobieranie["adres"];
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>"
        ?>
    </section>

</body>

</html>
