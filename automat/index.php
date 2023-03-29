
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Automat</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

<div id="baner">
    <h1>AUTOMAT</h1>
</div>

<div id="glowny">

    <div id="lewy">
  
</div>

<div id="srodek">
    <table name="tabela1">
        <tr>
            <td>NUMER</td>
            <td>NAZWA</td>
            <td>CENA</td>
            <td>ILOŚĆ</td>
        </tr>
    <?php
    $con = mysqli_connect("localhost", "root", "","automat");

    
    $query = "SELECT id, nazwa, cena, ilość FROM produkty";
    $r = mysqli_query($con, $query);
    while ($row = mysqli_fetch_array  ($r))
    {
        echo "<tr>
        <td>$row[0]</td>
        <td>$row[1]</td>
        <td>$row[2] zł</td>
        <td>$row[3]</td>
        </tr>";
    }
?>
    </table>
    <br>
    <button type="submit">1</button>
    <button type="submit">2</button>
    <button type="submit">3</button>
    <button type="submit">4</button>
    <button type="submit">5</button>
    <button type="submit">6</button>


</div>

<div id="prawy">

</div>


</div>

<div id="stopka">


</div>

<?php
mysqli_close($con)
?>
</body>
</html>

