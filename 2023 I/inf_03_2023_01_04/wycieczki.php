<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wycieczki po Europie</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <div id="baner">
        <h1>Biuro TURYSTYCZNE</h1>
    </div>
    <div id="dane">
        <h3>Wycieczki, na które są wolne miejsca</h3>
        <ul>
            <?php
                //skrypt 1
                $polaczenie = mysqli_connect('localhost', 'root', '', 'biuro');
                $zapytanie1 = "SELECT `id`, `dataWyjazdu`, `cel`, `cena` FROM `wycieczki` WHERE `dostepna` = 1";
                $wynik1 = mysqli_query($polaczenie, $zapytanie1);
                while ($wiersz1 = mysqli_fetch_row($wynik1)){
                    echo "<li>$wiersz1[0]. dnia $wiersz1[1] jedziemy do $wiersz1[2], cena: $wiersz1[3]</li>";
                }

            ?>
        </ul>
    </div>
    <div id="lewy">
        <h2>Bestselery</h2>
        <table>
            <tr>
                <td>Wenecja</td>
                <td>kwiecień</td>
            </tr>
            <tr>
                <td>Londyn</td>
                <td>lipiec</td>
            </tr>
            <tr>
                <td>Rzym</td>
                <td>wrzesień</td>
            </tr>
        </table>
    </div>
    <div id="srodkowy">
        <h2>Nasze zdjęcia</h2>
        <?php
            //skrypt2
            $zapytanie2 = "SELECT `nazwaPliku`, `podpis` FROM `zdjecia` ORDER BY `podpis` DESC";
            $wynik2 = mysqli_query($polaczenie, $zapytanie2);
            while($wiersz2 = mysqli_fetch_row($wynik2)){
                echo "<img src='$wiersz2[0]' alt='$wiersz2[1]' />";
            }
            mysqli_close($polaczenie);
        ?>
    </div>
    <div id="prawy">
        <h2>Skontaktuj się </h2>
        <a href="mailto:turysta@wycieczki.pl">napisz do nas</a>
        <p>telefon: 111 222 333</p>
    </div>
    <div id="stopka">
        <p>Stronę wykonał: PESEL</p>
    </div>
</body>
</html>
