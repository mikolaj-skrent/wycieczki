<?php
$condom = mysqli_connect("localhost", "root", "", "wyprawy");

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
            <form action="" method="POST">
                <select name="nazwa">
                    <!-- skrypt 1 -->
                </select>

                <label for="1">Ile dorosłych</label><br>
                <input type="number" id="1" name="1" min="1" max="100"><br>

                <label for="2">Ile dzieci</label><br>
                <input type="number" id="2" name="2" min="1" max="100"><br>

                <label for="3">Termin</label><br>
                <input type="data" id="3" name="3" min="1" max="100"><br>

                <button type="submit">Symulacja ceny</button>
                <!-- skrypt 2 -->
                <h4>Koszt wycieczki</h4>
            </form>
        </aside>

        
        <section>
            <!-- skrypt 3 -->
        </section>
    </main>


    <footer>
        <p> Autor: plemie maciutów </p>
    </footer>
</body>

</html>