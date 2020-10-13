
<?php
$host = "104.131.32.72";
$uname = "chamara_chamara";
$pass = "Nokia6.1Plus";
$database = "chamara_offline_erp"; //Change Your Database Name
$conn = new mysqli($host, $uname, $pass, $database);
$filename = 'offlineerp.sql'; //How to Create SQL File Step : url:http://localhost/phpmyadmin->detabase select->table select->Export(In Upper Toolbar)->Go:DOWNLOAD .SQL FILE
$op_data = '';
$lines = file($filename);
foreach ($lines as $line)
{
    if (substr($line, 0, 2) == '--' || $line == '')//This IF Remove Comment Inside SQL FILE
    {
        continue;
    }
    $op_data .= $line;
    if (substr(trim($line), -1, 1) == ';')//Breack Line Upto ';' NEW QUERY
    {
        $conn->query($op_data);
        $op_data = '';
    }
}
echo "Successful";
?>






<?php 
/*
//Enter your database information here and the name of the backup file
$mysqlDatabaseName ='Database name';
$mysqlUserName ='User name';
$mysqlPassword ='Password';
$mysqlHostName ='dbxxx.hosting-data.io';
$mysqlImportFilename ='Filename-of-backup.sql';

//Please do not change the following points
//Import of the database and output of the status
$command='mysql -h' .$mysqlHostName .' -u' .$mysqlUserName .' -p' .$mysqlPassword .' ' .$mysqlDatabaseName .' < ' .$mysqlImportFilename;
exec($command,$output=array(),$worked);
switch($worked){
case 0:
echo 'The data from the file <b>' .$mysqlImportFilename .'</b> were successfully imported into the database <b>' .$mysqlDatabaseName .'</b>';
break;
case 1:
echo 'An error occurred during the import. Please check if the file is in the same folder as this script. Also check the following data again:<br/><br/><table><tr><td>MySQL Database Name:</td><td><b>' .$mysqlDatabaseName .'</b></td></tr><tr><td>MySQL User Name:</td><td><b>' .$mysqlUserName .'</b></td></tr><tr><td>MySQL Password:</td><td><b>NOTSHOWN</b></td></tr><tr><td>MySQL Host Name:</td><td><b>' .$mysqlHostName .'</b></td></tr><tr><td>MySQL Import Dateiname:</td><td><b>' .$mysqlImportFilename .'</b></td></tr></table>';
break;
}
*/
?>
