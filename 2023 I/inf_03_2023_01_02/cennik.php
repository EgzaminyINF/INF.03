<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wynajem pokoi</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <div id="baner">
        <h1>Pensjonat pod dobrym humorem</h1>
    </div>
    <div id="lewy">
        <a href="index.html">GŁÓWNA</a><br>
        <img src="1.jpg" alt="pokoje">
    </div>
    <div id="srodkowy">
        <a href="cennik.php">CENNIK</a><br>
        <table>
            <?php
                // skrypt1
                $polaczenie = mysqli_connect('localhost', 'root', '', 'wynajem');
                $zapytanie = "SELECT * FROM pokoje";
                $wynik = mysqli_query($polaczenie, $zapytanie);
                while($wiersz = mysqli_fetch_row($wynik)){
                    echo "<tr>
                            <td>$wiersz[0]</td>
                            <td>$wiersz[1]</td>
                            <td>$wiersz[2]</td>
                    </tr>";
                }
                mysqli_close($polaczenie);
            ?>
        </table>
    </div>
    <div id="prawy">
        <a href="kalkulator.html">KALKULATOR</a><br>
        <img src="3.jpg" alt="pokoje">
    </div>
    <div id="stopka">
        <p>Stronę opracował: PESEL</p>
    </div>
</body>
</html>