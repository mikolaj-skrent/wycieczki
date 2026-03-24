<?php
$con = mysqli_connect("localhost", "root", "", "wyprawy");

?>


<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biuro turystyczne</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <nav>
        <ul>
            <li><a href="index.php">Strona główna</a></li>
            <li><a href="wczasy.html">Wczasy</a></li>
            <li><a href="wycieczki.html">Wycieczki</a></li>
            <li><a href="allinclusive.html">All inclusive</a></li>
        </ul>
    </nav>


    <main>
        <!-- blok boczny -->
        <aside>
            <h3>Twój cel wyprawy</h3>
            <label for="">Miejsce wycieczki</label>
            <form action="index.php" method="POST">
                <select name="form1">
                    <!-- skrypt 1 -->
                    <?php
                    $sql1 = "SELECT nazwa FROM miejsca ORDER BY nazwa ASC;";
                    $result = $con->query($sql1);
                    while ($row = $result->fetch_assoc()) {
                        echo "<option>";
                        echo $row["nazwa"];
                        echo "</option>";
                    }

                    ?>

                </select>

                <label for="1">Ile dorosłych</label><br>
                <input type="number" id="1" name="1" min="1" max="100"><br>

                <label for="2">Ile dzieci</label><br>
                <input type="number" id="2" name="2" min="1" max="100"><br>

                <label for="3">Termin</label><br>
                <input type="data" id="3" name="3" min="1" max="100"><br>

                <button type="submit" name="formularzSymulacja">Symulacja ceny</button>

            </form>
            <h4>Koszt wycieczki</h4>
            <!-- skrypt 2 -->
            <?php
            if (isset($_POST["formularz-symulacja"])) {
                $nazwa = $_POST["form1"];
                $sql2 = "SELECT cena FROM miejsca WHERE nazwa = '$nazwa';";
            }
            ?>
        </aside>


        <section>
            <h3>Wycieczki</h3>
            <!-- skrypt 3 -->
        </section>
    </main>


    <footer>
        <p> Autor: plemie maciutów </p>
    </footer>
</body>

</html>

<?php
$con->close();
?>