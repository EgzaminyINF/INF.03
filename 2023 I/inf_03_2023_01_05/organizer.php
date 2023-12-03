<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sierpniowy kalendarz</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <div id="baner1">
        <h1>Organizer: SIERPIEŃ</h1>
    </div>
    <div id="baner2">
        <form action="organizer.php" method="post">
            Zapisz wydarzenie:
            <input type="text" name="wpis" >
            <input type="submit" value="OK">
        </form>
        <?php
            @$wpis = $_POST['wpis'];
            $polaczenie = mysqli_connect('localhost', 'root', '', 'kalendarz');
            $zapytanie2 = "UPDATE `zadania` SET `wpis`='$wpis' WHERE `dataZadania` = '2020-08-09'";
            $wynik2 = mysqli_query($polaczenie, $zapytanie2);
            
        ?>
    </div>
    <div id="baner3">
        <img src="logo2.png" alt="sierpień">
    </div>
    <div id="glowny">
        <?php
            //skrypt 1

            $zapytanie1 = "SELECT `dataZadania`, `wpis` FROM `zadania` WHERE `miesiac` LIKE 'sierpien'";
            $wynik1 = mysqli_query($polaczenie, $zapytanie1);
            while($wiersz1 = mysqli_fetch_row($wynik1)){
                echo "<div class='kalendarz'>
                          <h5>$wiersz1[0]</h5>
                          <p>$wiersz1[1]</p>  
                      </div>";
            }
            mysqli_close($polaczenie);
        ?>
    </div>
    <div id="stopka">
        <p>Stronę wykonał: PESEL</p>
    </div>
</body>
</html>
