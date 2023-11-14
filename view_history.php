<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Podglad historii</title>
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
    <div>
    <h1>Dziennik zdarzen</h1>
    <?php
    $zmiennaB = mysqli_connect("localhost", "root", "", "erpdatabase");
    $sprawdzanie = "Select czas, czynnosc from historia ORDER BY czas DESC";
    $wysylanie = mysqli_query($zmiennaB, $sprawdzanie);
    echo "<ol>";
    while ($pobieranie = mysqli_fetch_array($wysylanie)) {
        echo "<li>";
        echo $pobieranie["czas"]." ".$pobieranie["czynnosc"];
        echo "</li>";
    }
    echo "</ol>";
    mysqli_close($zmiennaB);
    ?>
    </div>

</body>

</html>