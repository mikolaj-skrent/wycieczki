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
        <a href="wczasy.html">Wczasy</a>
        <a href="wycieczki.html">Wycieczki</a>
        <a href="allinclusive.html">All inclusive</a>
    </nav>


    <main>
        <!-- blok boczny -->
        <aside>
            <h3>Twój cel wyprawy</h3>
            <label for="">Miejsce wycieczki</label>
            <form action="" method="POST">
                <select name="nazwa">
                    <!-- tu wypełnia skrypt -->
                </select>

                <label for="1">Ile dorosłych</label>
                <input type="number" id="1" name="1" min="1" max="100">
                <label for="2">Ile dzieci</label>
                <input type="number" id="2" name="2" min="1" max="100">
                <label for="3">Termin</label>
                <input type="data" id="3" name="3" min="1" max="100">
                <button type="submit">Symulacja ceny</button>
                <h4>Koszt wycieczki</h4>
            </form>
        </aside>

        <!-- sekcja -->
        <section>
<p> Autor: dupa irysa </p>
        </section>
    </main>


    <footer>

    </footer>
</body>

</html>