<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motocykle</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <img id="zdjeciemotor" src="motor.png" alt="motocykl">
    <header>
            <h1>Motocykle - moja pasja</h1>
    </header>

    <main>
        <section id="left">
            <h2>Gdzie pojechać?</h2>
            <dl>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "motory");
            $sql = "SELECT nazwa, opis, poczatek, zrodlo FROM wycieczki JOIN zdjecia ON zdjecia_id = zdjecia.id;";
            $result = $conn->query(query: $sql);
            while($row = $result -> fetch_array()) {
                echo "<div id='terminy'>";
                echo "<dt>";
                    echo "$row[0], rozpoczyna się w $row[2], <a id='zdjecie' href='$row[3].jpg'>zobacz zdjęcie</a>";
                echo "</dt>";
                echo "</div>";
                echo "<div id='opis'>";
                echo "<dd>";
                    echo $row[1];
                echo "</dd>";
                echo "</div>";
            }
        ?>
            </dl>
        </section>

        <section id="right_1">
            <h2>Co kupić?</h2>
            <ol>
                <li>Honda CBR125R</li>
                <li>Yamaha YBR125</li>
                <li>Honda VFR800i</li>
                <li>Honda CBR1100XX</li>
                <li>BMW R1200GS LC</li>
            </ol>
        </section>

        <section id="right_2">
            <h2>Statystyki</h2>
            <?php
                $sql = "SELECT COUNT(*) FROM wycieczki;";
                $result = $conn->query(query: $sql);
                while($row = $result -> fetch_array()) {
                    $liczba = $row[0];
                }
                echo "<p>Wpisanych wycieczek: $liczba</p>";
            ?>
            <p>Użytkowników forum: 200</p>
            <p>Przesłanych zdjęć: 1300</p>
        </section>
    </main>

    <footer>
        <p>Stronę wykonał: 05211706273</p>
    </footer>
</body>
</html>

<?php
$conn ->close();
?>