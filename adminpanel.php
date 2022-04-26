<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <title>Admin Panel</title>
</head>
<body>
<h1>Users</h1>
<table class = "table table-striped">
<thead>
    <tr >
        <th >ID</th>
        <th >Full Name</th>
        <th >Email</th>
        <th >Phone</th>
        <th >Created at</th>
        <th >Sign Date</th>
        <th >View</th>
    </tr>
</thead>
<tbody>
 
<?php
require_once("header.php");
require_once ("database.php");
$database_instance = Database::getInstance();
$connection = $database_instance->getConnection(); 
$rows = array();
$query = $connection->query("SELECT * FROM users");
while($row = mysqli_fetch_row($query)){
    echo "<tr>";
    echo "<td>".$row[0]."</td>";
    echo "<td>".$row[1]."</td>";
    echo "<td>".$row[2]."</td>";
    echo "<td>".$row[3]."</td>";
    echo "<td>".$row[4]."</td>";
    echo "<td>".$row[5]."</td>";
    echo "<td>"."<a href = 'show.php?id=".$row[0]."'".">View</a>"."</td>";
    echo "</tr>";
}
?>
</tbody>
</table>
?>