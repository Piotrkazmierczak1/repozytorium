<?php 

$sedzia = $_POST['sedzia'];
$data = $_POST['data'];
$lowisko = $_POST['lowisko'];

$p=mysqli_connect('localhost', 'root', '', 'wędkarstwo');
$zapytanie= "INSERT INTO zawody_wedkarskie values (NULL, 0,'$lowisko','$data','$sedzia')";
mysqli_query($p,$zapytanie);
mysqli_close($p)

?>