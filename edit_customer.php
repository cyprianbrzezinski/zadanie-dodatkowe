<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edycja produktu</title>
    <style>
        .powrot {
            float: right;
            margin-right: 20%;
            background: green;
            color: red;
            padding: 20px;
            text-decoration: none;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        main {
            padding: auto;
            margin: 5%;
        }

        section {
            margin-top: 10%;
        }
        td{
            padding: 5px;
            border: 1px solid purple;
        }
    </style>
    <?php
    $zmiennaD = mysqli_connect("localhost", "root", "", "erpdatabase");
    $zmienna2 = "SELECT max(id) FROM customers";
    $max_id_array = mysqli_query($zmiennaD, $zmienna2);
    $max_id = 0;
    while ($row = mysqli_fetch_array($max_id_array)) {
        $max_id = $row['max(id)'];
    }

    $zmienna3 = "SELECT min(id) FROM customers";
    $min_id_array = mysqli_query($zmiennaD, $zmienna3);
    $min_id = 0;
    while ($row2 = mysqli_fetch_array($min_id_array)) {
        $min_id = $row2['min(id)'];
    }
    ?>
</head>

<body>


    <main>

        <section>

            <form action="edit_customer.php" method="post">
                <h1>EDYTUJ NAZWE</h1>
                <label for="id">ID:</label>
                <input type="number" name="id" min="<?php echo ($min_id); ?>" max="<?php echo ($max_id); ?>" ></br>
                <label for="imie">imie:</label>
                <input type="text" name="imie">
                <input type="submit" value="EDYTUJ NAZWE">
            </form>
            <?php
            $zmiennaC = mysqli_connect("localhost", "root", "", "erpdatabase");
            if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["id"]) && isset($_POST["imie"])) {
                $id = $_POST["id"];
                $imie = $_POST["imie"];
                $sprawdzenie_id = "SELECT * FROM customers WHERE id ='$id'";
                $wynik_sprawdzenia = mysqli_query($zmiennaC, $sprawdzenie_id);

                if(mysqli_num_rows($wynik_sprawdzenia) > 0){

                echo "Imie zostało edytowane  na: $imie <br>";
                $Zmiana = "update customers set imie = '$imie' where id ='$id'";
                $lacznie = mysqli_query($zmiennaC, $Zmiana);

                $obecna_data = date("Y-m-d H:i:s");
                $dodanie_daty = "INSERT INTO historia (czas,czynnosc) VALUES ('$obecna_data','Edycja klienta imie')";
                $wysylanie2 = mysqli_query($zmiennaC, $dodanie_daty);
                echo "Akcja została dodana do histori.";
                }else{
                    echo"Podaj prawidłowy numer id";
                }
            }
            mysqli_close($zmiennaC);
            ?>
        </section>
        <section>
            <form action="edit_customer.php" method="post">
                <h1>EDYTUJ nazwisko</h1>
                <label for="id">ID:</label>
                <input type="number" name="id" min="<?php echo ($min_id); ?>" max="<?php echo ($max_id); ?>" ></br>
                <label for="nazwisko">nazwisko:</label>
                <input type="text" name="nazwisko">
                <input type="submit" value="EDYTUJ NAZWISKO">
            </form>
            <?php
            $zmiennaC = mysqli_connect("localhost", "root", "", "erpdatabase");
            if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["id"]) && isset($_POST["nazwisko"])) {
                $id = $_POST["id"];
                $nazwisko = $_POST["nazwisko"];
                $sprawdzenie_id = "SELECT * FROM customers WHERE id ='$id'";
                $wynik_sprawdzenia = mysqli_query($zmiennaC, $sprawdzenie_id);

                if(mysqli_num_rows($wynik_sprawdzenia) > 0){

                echo "Nazwisko zostało edytowane na: $nazwisko <br>";
                $Zmiana = "update customers set nazwisko = '$nazwisko' where id ='$id'";
                $lacznie = mysqli_query($zmiennaC, $Zmiana);

                $obecna_data = date("Y-m-d H:i:s");
                $dodanie_daty = "INSERT INTO historia (czas,czynnosc) VALUES ('$obecna_data','Edycja klienta nazwisko')";
                $wysylanie2 = mysqli_query($zmiennaC, $dodanie_daty);
                echo "Akcja została dodana do histori.";
                }else{
                    echo"Podaj prawidłowy numer id";
                }
            }
            mysqli_close($zmiennaC);
            ?>
        </section>
        <section>
            <form action="edit_customer.php" method="post">
                <h1>EDYTUJ ADRES</h1>
                <label for="id">ID:</label>
                <input type="number" name="id" min="<?php echo ($min_id); ?>" max="<?php echo ($max_id); ?>" ></br>
                <label for="adres">adres:</label>
                <input type="text" name="adres">
                <input type="submit" value="EDYTUJ ADRES">
            </form>
            <?php
            $zmiennaC = mysqli_connect("localhost", "root", "", "erpdatabase");
            if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["id"]) && isset($_POST["adres"])) {
                $id = $_POST["id"];
                $adres = $_POST["adres"];
                $sprawdzenie_id = "SELECT * FROM customers WHERE id ='$id'";
                $wynik_sprawdzenia = mysqli_query($zmiennaC, $sprawdzenie_id);

                if(mysqli_num_rows($wynik_sprawdzenia) > 0){

                echo "Adres został edytowany na: $adres <br>";
                $Zmiana = "update customers set adres = '$adres' where id ='$id'";
                $lacznie = mysqli_query($zmiennaC, $Zmiana);

                $obecna_data = date("Y-m-d H:i:s");
                $dodanie_daty = "INSERT INTO historia (czas,czynnosc) VALUES ('$obecna_data','Edycja klienta adres')";
                $wysylanie2 = mysqli_query($zmiennaC, $dodanie_daty);
                echo "Akcja została dodana do histori.";
                }else{
                    echo"Podaj prawidłowy numer id";
                }
            }
            mysqli_close($zmiennaC);
            ?>
        </section>
        <section>
            <form action="edit_customer.php" method="post">
                <h1>EDYTUJ E-MAIL</h1>
                <label for="id">ID:</label>
                <input type="number" name="id" min="<?php echo ($min_id); ?>" max="<?php echo ($max_id); ?>" ></br>
                <label for="e_mail">E-mail:</label>
                <input type="text"  name="e_mail">
                <input type="submit" value="EDYTUJ E-MAIL">
            </form>
            <?php
            $zmiennaC = mysqli_connect("localhost", "root", "", "erpdatabase");
            if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["id"]) && isset($_POST["e_mail"])) {
                $id = $_POST["id"];
                $e_mail = $_POST["e_mail"];
                $sprawdzenie_id = "SELECT * FROM customers WHERE id ='$id'";
                $wynik_sprawdzenia = mysqli_query($zmiennaC, $sprawdzenie_id);

                if(mysqli_num_rows($wynik_sprawdzenia) > 0){

                echo "E-mail został edytowany na: $e_mail <br>";
                $Zmiana = "update customers set e_mail = '$e_mail' where id ='$id'";
                $lacznie = mysqli_query($zmiennaC, $Zmiana);

                $obecna_data = date("Y-m-d H:i:s");
                $dodanie_daty = "INSERT INTO historia (czas,czynnosc) VALUES ('$obecna_data','Edycja klienta e_mail')";
                $wysylanie2 = mysqli_query($zmiennaC, $dodanie_daty);
                echo "Akcja została dodana do histori.";
                }else{
                    echo"Podaj prawidłowy numer id";
                }
            }
            mysqli_close($zmiennaC);
            ?>
        </section>

    </main>
    <nav>
        <h1>Lista produktow do edycji</h1>
        <?php
        $zmiennaA = mysqli_connect("localhost", "root", "", "erpdatabase");
        $sprawdzanie = "SELECT id, imie, nazwisko, adres, e_mail FROM customers  ";
        $wysylanie = mysqli_query($zmiennaA, $sprawdzanie);
        echo "<table>";
        echo "<tr>";
        echo "<td>";
        echo "<b>" . "id";
        echo "</td>";
        echo "<td>";
        echo "<b>" . "imie";
        echo "</td>";
        echo "<td>";
        echo "<b>" . "nazwisko";
        echo "</td>";
        echo "<td>";
        echo "<b>" . "adres";
        echo "</td>";
        echo "<td>";
        echo "<b>" . "e-mail";
        echo "</td>";
        echo "</tr>";
        while ($pobieranie = mysqli_fetch_array($wysylanie)) {
            echo "<tr>";
            echo "<td>" . $pobieranie["id"] . " " . "</td>";
            echo "<td>" . $pobieranie["imie"] . " " . "</td>";
            echo "<td>" . $pobieranie["nazwisko"] . " " . "</td>";
            echo "<td>" . $pobieranie["adres"] . " " . "</td>";
            echo "<td>" . $pobieranie["e_mail"] . " " . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_close($zmiennaA);
        ?>
    </nav>
    <a href="index.html" class="powrot">powrot</a>

</body>

</html>