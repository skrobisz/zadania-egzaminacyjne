<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl_2.css">
</head>
<body>
<?php
    $data = $_POST['data'];
    $osoby = $_POST['ilosc'];
    $telefon = $_POST['numer'];
    if(!empty($data) && !empty($osoby) && !empty($telefon)) {
        echo "Zarezerwowano stolik!";
        $kwerenda = "INSERT INTO rezerwacje (id, nr_stolika, data_rez, liczba_osob, telefon) VALUES (NULL, NULL, '$data', '$osoby', '$telefon');";
        $polaczenie = mysqli_connect("localhost", "root", "", "baza");
        mysqli_query($polaczenie, $kwerenda);
        mysqli_close($polaczenie);
    }
    else {
        echo "Wystąpił błąd, proszę wpisać poprawne dane";
    }
?>
    <br><a class="BackLink" href="restauracja.html">Wróć do strony głownej</a>
</body>
</html>