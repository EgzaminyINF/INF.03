<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $poleczenie = mysqli_connect('localhost', 'root', '', 'wedkarstwo');
        $lowisko = $_POST['lowisko'];
        $data = $_POST['data'];
        $sedzia = $_POST['sedzia'];
        $zapytanie = "INSERT INTO zawody_wedkarskie (`id`, `Karty_wedkarskie_id`, `Lowisko_id`, `data_zawodow`, `sedzia`) VALUES (NULL, '0', '$lowisko', '$data', '$sedzia')";
        $wynik = mysqli_query($poleczenie, $zapytanie);
        if($wynik)
            echo "Dodano zawody wędkarskie";
        
        mysqli_close($poleczenie);
    ?>
</body>
</html>
