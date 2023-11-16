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
    </style>
    <?php
        $zmiennaD= mysqli_connect("localhost", "root", "", "erpdatabase");
        $zmienna2="SELECT max(id) FROM products";
        $max_id_array=mysqli_query($zmiennaD,$zmienna2);
        $max_id=0;
        while($row=mysqli_fetch_array($max_id_array)){
            $max_id=$row['max(id)'];
        }
    ?>
</head>

<body>


    <main>

        <section>

            <form action="edit_product.php" method="post">
                <h1>EDYTUJ NAZWE</h1>
                <label for="id">ID:</label>
                <input type="number" name="id" section min="1" max="<?php echo($max_id); ?>"></br>
                <label for="nazwa">Nazwa:</label>
                <input type="text" name="nazwa">
                <input type="submit" value="EDYTUJ NAZWE">
            </form>
            <?php
            $zmiennaC = mysqli_connect("localhost", "root", "", "erpdatabase");
            if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["id"]) && isset($_POST["nazwa"])) {
                $id = $_POST["id"];
                $nazwa = $_POST["nazwa"];
                $Zmiana = "update products set nazwa = '$nazwa' where id ='$id'";
                $lacznie = mysqli_query($zmiennaC, $Zmiana);

                echo "Nazwa została edytowana na: $nazwa<br>";


                $obecna_data = date("Y-m-d H:i:s");
                $dodanie_daty = "INSERT INTO historia (czas,czynnosc) VALUES ('$obecna_data','Edycja produktu nazwa')";
                $wysylanie2 = mysqli_query($zmiennaC, $dodanie_daty);
                echo "Akcja została dodana do histori.";
            }
            mysqli_close($zmiennaC);
            ?>
        </section>
        <section>
            <form action="edit_product.php" method="post">
                <h1>EDYTUJ Opis</h1>
                <label for="id">ID:</label>
                <input type="number" name="id" section min="1" max="<?php echo($max_id); ?>"></br>
                <label for="opis">opis:</label>
                <input type="text" name="opis">
                <input type="submit" value="EDYTUJ OPIS">
            </form>
            <?php
            $zmiennaC = mysqli_connect("localhost", "root", "", "erpdatabase");
            if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["id"]) && isset($_POST["opis"])) {
                $id = $_POST["id"];
                $opis = $_POST["opis"];
                $Zmiana = "update products set opis = '$opis' where id ='$id'";
                $lacznie = mysqli_query($zmiennaC, $Zmiana);

                echo "Nazwa została edytowana na: $opis<br>";


                $obecna_data = date("Y-m-d H:i:s");
                $dodanie_daty = "INSERT INTO historia (czas,czynnosc) VALUES ('$obecna_data','Edycja produktu opisu')";
                $wysylanie2 = mysqli_query($zmiennaC, $dodanie_daty);
                echo "Akcja została dodana do histori.";
            }
            mysqli_close($zmiennaC);
            ?>
        </section>
        <section>
            <form action="edit_product.php" method="post">
                <h1>EDYTUJ CENE</h1>
                <label for="id">ID:</label>
                <input type="number" name="id" section min="1" max="<?php echo($max_id); ?>"></br>
                <label for="cena">cena:</label>
                <input type="number" name="cena">
                <input type="submit" value="EDYTUJ CENE">
            </form>
            <?php
            $zmiennaC = mysqli_connect("localhost", "root", "", "erpdatabase");
            if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["id"]) && isset($_POST["cena"])) {
                $id = $_POST["id"];
                $cena = $_POST["cena"];
                $Zmiana = "update products set cena = '$cena' where id ='$id'";
                $lacznie = mysqli_query($zmiennaC, $Zmiana);

                echo "Nazwa została edytowana na: $cena<br>";


                $obecna_data = date("Y-m-d H:i:s");
                $dodanie_daty = "INSERT INTO historia (czas,czynnosc) VALUES ('$obecna_data','Edycja produktu ceny')";
                $wysylanie2 = mysqli_query($zmiennaC, $dodanie_daty);
                echo "Akcja została dodana do histori.";
            }
            mysqli_close($zmiennaC);
            ?>
        </section>
        <section>
            <form action="edit_product.php" method="post">
                <h1>EDYTUJ DOSTEPNOSC</h1>
                <label for="id">ID:</label>
                <input type="number" name="id"  min="1" max="<?php echo($max_id); ?>" ></br>
                <label for="dostepnosc">Dostepnosc:</label>
                <input type="number" min="0" max="1" name="dostepnosc"><br>
                <input type="submit" value="EDYTUJ DOSTEPNOSC">
            </form>
            <?php
            $zmiennaC = mysqli_connect("localhost", "root", "", "erpdatabase");
            if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["id"]) && isset($_POST["dostepnosc"])) {
                $id = $_POST["id"];
                $dostepnosc = $_POST["dostepnosc"];
                $Zmiana = "update products set dostepnosc = '$dostepnosc' where id ='$id'";
                $lacznie = mysqli_query($zmiennaC, $Zmiana);

                echo "Nazwa została edytowana na: $dostepnosc<br>";


                $obecna_data = date("Y-m-d H:i:s");
                $dodanie_daty = "INSERT INTO historia (czas,czynnosc) VALUES ('$obecna_data','Edycja produktu dostepnosc')";
                $wysylanie2 = mysqli_query($zmiennaC, $dodanie_daty);
                echo "Akcja została dodana do histori.";
            }
            mysqli_close($zmiennaC);
            ?>
        </section>

    </main>
    <nav>
        <h1>Lista produktow do edycji</h1>
        <?php
        $zmiennaA = mysqli_connect("localhost", "root", "", "erpdatabase");
        $sprawdzanie = "SELECT id, nazwa, opis, cena, dostepnosc FROM products  ";
        $wysylanie = mysqli_query($zmiennaA, $sprawdzanie);
        echo "<table>";
        echo "<tr>";
        echo "<td>";
        echo "<b>" . "id";
        echo "</td>";
        echo "<td>";
        echo "<b>" . "Nazwa";
        echo "</td>";
        echo "<td>";
        echo "<b>" . "opis";
        echo "</td>";
        echo "<td>";
        echo "<b>" . "cena";
        echo "</td>";
        echo "<td>";
        echo "<b>" . "dostepnosc";
        echo "</td>";
        echo "</tr>";
        while ($pobieranie = mysqli_fetch_array($wysylanie)) {
            echo "<tr>";
            echo "<td>" . $pobieranie["id"] . " " . "</td>";
            echo "<td>" . $pobieranie["nazwa"] . " " . "</td>";
            echo "<td>" . $pobieranie["opis"] . " " . "</td>";
            echo "<td>" . $pobieranie["cena"] . " " . "</td>";
            echo "<td>" . $pobieranie["dostepnosc"] . " " . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_close($zmiennaA);
        ?>
    </nav>
    <a href="index.html" class="powrot">powrot</a>

</body>

</html>
