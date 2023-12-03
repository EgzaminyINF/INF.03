<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurtownia szkolna</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div id="baner">
        <h1>Hurtownia z najlepszymi cenami</h1>
    </div>
    <div id="lewy">
        <h2>Nasze ceny</h2>
        <table>
            <?php
                $polaczenie = mysqli_connect('localhost', 'root', '', 'sklep');
                $zapytanie1 = "SELECT `nazwa`, `cena` FROM `towary` LIMIT 4; ";
                $wynik1 = mysqli_query($polaczenie, $zapytanie1);
                while($wiersz1 = mysqli_fetch_row($wynik1)){
                    echo "<tr>
                            <td>$wiersz1[0]</td>
                            <td>$wiersz1[1]</td>
                        </tr>";   
                }
                
            ?>
        </table>
    </div>
    <div id="srodkowy">
        <h2>Koszt zakupów</h2>
        <form action="index.php" method="post">
            wybierz artykuł
            <select name="nazwa">
                <option>Zeszyt 60 kartek</option>
                <option>Zeszyt 32 kartki</option>
                <option>Cyrkiel</option>
                <option>Linijka 30 cm</option>
            </select>
            <br>
            liczba sztuk: 
            <input type="number" name="ilosc" >
            <br>
            <input type="submit" value="OBLICZ">
        </form>
        <?php
            //skrypt 2
            @$nazwa = $_POST['nazwa'];
            @$ilosc = $_POST['ilosc'];
            $zapytanie2 = "SELECT `cena` FROM `towary` WHERE `nazwa` LIKE '$nazwa'";
            $wynik2 = mysqli_query($polaczenie, $zapytanie2);
            while($wiersz2 = mysqli_fetch_row($wynik2)){
                $cena = $wiersz2[0] * $ilosc;
                echo "wartość zakupów: $cena";   
            }    
            mysqli_close($polaczenie);
        ?>
    </div>
    <div id="prawy">
        <h2>Kontakt</h2>
        <img src="zakupy.png" alt="hurtownia">
        <p>e-mail: <a href="mailto:hurt@poczta2.pl">hurt@poczta2.pl</a></p>
    </div>
    <div id="stopka">
        <h4>Stronę wykonał: PESEL</h4>
    </div>
</body>
</html>