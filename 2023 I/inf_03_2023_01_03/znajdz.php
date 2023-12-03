<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwiaty</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <div id="baner">
        <h1>Grupa Polskich Kwiaciarni</h1>
    </div>
    <div id="lewy">
        <h2>Menu</h2>
        <ol>
            <li><a href="index.html">Strona główna</a></li>
            <li><a href="http://www.kwiaty.pl" target="_blank">Rozpoznaj kwiaty</a></li>
            <li><a href="znajdz.php">Znajdź kwiaciarnię</a>
                <ul>
                    <li>w Warszawie</li>
                    <li>w Malborku</li>
                    <li>w Poznaniu</li>
                </ul>
            </li>
        </ol>
    </div>
    <div id="prawy">
        <h2>Znajdź kwiaciarnię</h2>
        <form action="znajdz.php" method="post">
            Podaj nazwę miasta: 
            <input type="text" name="miasto" />
            <input type="submit" value="SPRAWDŹ" />
        </form>
        <?php
            //skrypt1
            @$miasto = $_POST['miasto'];
            $polaczenie = mysqli_connect('localhost', 'root', '', 'kwiaciarnia');
            $zapytanie = "SELECT `nazwa`, `ulica` FROM `kwiaciarnie` WHERE `miasto` LIKE '$miasto'";
            $wynik = mysqli_query($polaczenie, $zapytanie);
            while($wiersz = mysqli_fetch_row($wynik)){
                echo "<h3>$wiersz[0], $wiersz[1]</h3>";
            }
            mysqli_close($polaczenie);
        ?>
    </div>
    <div id="stopka">
        <p>Stronę opracował: PESEL</p>
    </div>
</body>
</html>