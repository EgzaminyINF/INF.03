<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklep dla uczniów</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div id="baner">
        <h1>Dzisiejsze promocje naszego sklepu</h1>
    </div>
    <div id="lewy">
        <h2>Taniej o 30%</h2>
        <ol>
            <?php
                //skrypt 1
                $polaczenie = mysqli_connect('localhost', 'root', '', 'sklep');
                $zapytanie1 = "SELECT `nazwa` FROM `towary` WHERE `promocja` = 1";
                $wynik1 = mysqli_query($polaczenie, $zapytanie1);
                while ($wiersz1 = mysqli_fetch_row($wynik1)) {
                    echo "<li>$wiersz1[0]</li>";
                }
                
            ?>
        </ol>
    </div>
    <div id="srodkowy">
        <h2>Sprawdź cenę</h2>
        <form action="index.php" method="post">
            <select name="nazwa">
                <option>Gumka do mazania</option>
                <option>Cienkopis</option>
                <option>Pisaki 60 szt.</option>
                <option>Markery 4 szt.</option>
            </select>
            <input type="submit" value="SPRAWDŹ">
        </form>
        <?php
            //skrypt 2
            @$nazwa = $_POST['nazwa'];
            $zapytanie2 = "SELECT `cena` FROM `towary` WHERE `nazwa` LIKE '$nazwa' ";
            $wynik2 = mysqli_query($polaczenie, $zapytanie2);
            while ($wiersz2 = mysqli_fetch_row($wynik2)) {
                $promocja = $wiersz2[0]*0.7;
                echo "<div class='wynik'>
                        cena regularna: $wiersz2[0]<br />
                        cena w promocji 30%: $promocja
                    </div>";
            }        

            mysqli_close($polaczenie);
        ?>
    </div>
    <div id="prawy">
        <h2>„Kontakt”</h2>
        <p>e-mail: <a href="mailto:bok@sklep.pl">bok@sklep.pl</a></p>
        <img src="promocja.png" alt="promocja">
    </div>
    <div id="stopka">
        <h4>Autor strony: PESEL</h4>
    </div>
</body>
</html>