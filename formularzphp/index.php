<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Formularz PHP</title>
</head>
<body>
    <header>
        <h1>Witam w moim sklepie!</h1>
        <p>Dostępne produkty:</p>
    </header>

    <main>
        <section class="left">
        <table>
            <tr>
                <th>Produkt</th>
                <th>Cena</th>
            </tr>
    <?php
$polaczenie = mysqli_connect("localhost", "root", "", "formularzphp");
$wynik = mysqli_query($polaczenie,"SELECT Produkt, Cena FROM `produkty`");
    while($r = mysqli_fetch_assoc($wynik)) {
        echo "<tr>";
        echo "<td>".$r['Produkt']."</td>";
        echo "<td>".$r['Cena']."</td>";
        echo "</tr>";
    }
mysqli_close($polaczenie);
    ?>
        </table>
        </section>
        <section class="right">
            <button>EY</button>
            <button>EY</button>
            <button>EY</button>
            <button>EY</button>
        </section>
            <p>Proszę podać ilość:</p>
        <input type="number"><br>
            <p>Proszę wybrać produkt:</p>
        <input type="">
    </main>
</body>
</html>