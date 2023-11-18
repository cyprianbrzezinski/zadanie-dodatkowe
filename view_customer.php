<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Podgląd uzytkownika</title>
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
        td{
            padding: 5px;
            border: 1px solid purple;
        }
    </style>
</head>

<body>

    <a href="index.html" class="powrot">powrot</a>
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

</body>

</html>