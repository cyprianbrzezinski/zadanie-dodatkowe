<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Podglad produktu</title>
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
    </style>
</head>

<body>

    <a href="index.html" class="powrot">powrot</a>
    <section>
    <h1>Lista dostępnych produktow</h1>
        <?php
        $zmiennaB = mysqli_connect("localhost", "root", "", "erpdatabase");
        $sprawdzanie = "SELECT nazwa, opis, cena FROM products where dostepnosc=1";
        $wysylanie = mysqli_query($zmiennaB, $sprawdzanie);
        echo "<table>";
            echo "<tr>";
                echo "<td>";
                    echo "<b>"."Nazwa";
                echo "</td>";
                echo "<td>";
                    echo "<b>"."opis";
                echo "</td>";
                echo "<td>";
                    echo "<b>"."cena";
                echo "</td>";
            echo "</tr>";
        while ($pobieranie = mysqli_fetch_array($wysylanie)) {
            echo "<tr>";
            echo "<td>" . $pobieranie["nazwa"] . " " . "</td>";
            echo "<td>" . $pobieranie["opis"] . " " . "</td>";
            echo "<td>" . $pobieranie["cena"] . " " . "</td>";
            echo "</tr>";
        }
        echo "</table>"
        ?>
        <h1>Lista niedostępnych produktow</h1>
        <?php
        $zmiennaB = mysqli_connect("localhost", "root", "", "erpdatabase");
        $sprawdzanie = "SELECT nazwa, opis, cena FROM products where dostepnosc=0";
        $wysylanie = mysqli_query($zmiennaB, $sprawdzanie);
        echo "<table>";
            echo "<tr>";
                echo "<td>";
                    echo "<b>"."Nazwa";
                echo "</td>";
                echo "<td>";
                    echo "<b>"."opis";
                echo "</td>";
                echo "<td>";
                    echo "<b>"."cena";
                echo "</td>";
            echo "</tr>";
        while ($pobieranie = mysqli_fetch_array($wysylanie)) {
            echo "<tr>";
            echo "<td>" . $pobieranie["nazwa"] . " " . "</td>";
            echo "<td>" . $pobieranie["opis"] . " " . "</td>";
            echo "<td>" . $pobieranie["cena"] . " " . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_close($zmiennaB);
        ?>
    </section>

</body>

</html>
