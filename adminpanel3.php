<?php
//show data from database as array 
require_once("header.php");
require_once('database.php');
//////////////////////// Database instance ////////////////////////////////
$database_instance = Database::getInstance();
$connection = $database_instance->getConnection();
$users = $connection->query("SELECT * FROM users");
$companies = $connection->query("SELECT * FROM companies");
$shareholders = $connection->query("SELECT * FROM shareholders");
$managers = $connection->query("SELECT * FROM managers");
$i = 0;
while($row = mysqli_fetch_row($users)){
    $array[0][$i]  = $row[0];
    $array[1][$i]  = $row[1];
    $array[2][$i]  = $row[2];
    $array[3][$i]  = $row[3];
    $array[4][$i]  = $row[4];
    $array[5][$i]  = $row[5];
    $i++;
}
$i = 0;
while($row = mysqli_fetch_row($companies)){
    $array[6][$i]  = $row[0];
    $array[7][$i]  = $row[1];
    $array[8][$i]  = $row[2];
    $array[9][$i]  = $row[3];
    $array[10][$i]  = $row[4];
    $array[11][$i]  = $row[5];
    $array[12][$i]  = $row[6];
    $array[13][$i]  = $row[7];
    $i++;
}

$i = 0;
while($row = mysqli_fetch_row($shareholders)){
    $array[14][$i]  = $row[0];
    $array[15][$i]  = $row[1];
    $array[16][$i]  = $row[2];
    $array[17][$i]  = $row[3];
    $array[18][$i]  = $row[4];
    $array[19][$i]  = $row[5];
    $i++;
}

$i = 0;
while($row = mysqli_fetch_row($managers)){
    $array[20][$i]  = $row[0];
    $array[21][$i]  = $row[1];
    $array[22][$i]  = $row[2];
    $array[23][$i]  = $row[3];
    $array[24][$i]  = $row[4];
    $array[25][$i]  = $row[5];
    $array[26][$i]  = $row[6];
    $array[27][$i]  = $row[7];
    $array[28][$i]  = $row[8];
    // $array[29][$i]  = $row[9];

    $i++;
}
echo "<pre>";
var_dump($array);
echo "</pre>";
