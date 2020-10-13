
<?php

$mysqli = new mysqli("104.131.32.72", "chamara_chamara", "Nokia6.1Plus", "chamara_offline_erp");
$mysqli->query('SET foreign_key_checks = 0');
if ($result = $mysqli->query("SHOW TABLES"))
{
    while($row = $result->fetch_array(MYSQLI_NUM))
    {
        $mysqli->query('DROP TABLE IF EXISTS '.$row[0]);
    }
}

$mysqli->query('SET foreign_key_checks = 1');
$mysqli->close();

echo "Connected to Server. Fetching Local Data...";

?>

<br>

<!--<meta http-equiv="refresh" content="5;url=http://dugut.b-y.me/fetching_data.php" />.-->

<a href="fetching_data.php" >fetching_data.php</a>













