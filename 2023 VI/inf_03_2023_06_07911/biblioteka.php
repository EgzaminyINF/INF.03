<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteka</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="baner">
        <h1>Biblioteka w Książkowicach Małych</h1>
    </div>
    <div id="lewy">
        <h4>Dodaj czytelnika</h4>
        <form action="biblioteka.php" method="post">
            imię: 
            <input type="text" name="imie" > <br>
            nazwisko: 
            <input type="text" name="nazwisko" > <br>
            symbol: 
            <input type="number" name="symbol" > <br>
            <input type="submit" value="AKCEPTUJ">
        </form>
        <?php
            //skrypt 1
            $polaczenie = mysqli_connect('localhost', 'root', '', 'biblioteka');
            if($_POST){
                $imie = $_POST['imie'];
                $nazwisko = $_POST['nazwisko'];
                $symbol = $_POST['symbol'];

                $zapytanie1 = "INSERT INTO `czytelnicy` VALUES (NULL, '$imie', '$nazwisko', '$symbol')";
                $wynik1 = mysqli_query($polaczenie, $zapytanie1);
                if($wynik1){
                    echo "Dodano czytelnika $imie $nazwisko";
                }
            }
        ?>
    </div>
    <div id="srodkowy">
        <img src="biblioteka.png" alt="biblioteka">
        <h6>ul. Czytelników 15;<br>Książkowice Małe</h6>
        <p><a href="mailto:biuro@bib.pl">Czy masz jakieś uwagi?</a></p>
    </div>
    <div id="prawy">
        <h4>Nasi czytelnicy:</h4>
        <ol>
            <?php
                //skrypt 2
                $zapytanie2 = "SELECT `imie`, `nazwisko` FROM `czytelnicy` ORDER BY `nazwisko` ASC ";
                $wynik2 = mysqli_query($polaczenie, $zapytanie2);
                while($wiersz = mysqli_fetch_row($wynik2)){
                    echo "<li>$wiersz[0] $wiersz[1]</li>";
                }
                mysqli_close($polaczenie);
            ?>
        </ol>
    </div>
    <div id="stopka">
        <p>Projekt witryny: PESEL</p>
    </div>
</body>
</html>