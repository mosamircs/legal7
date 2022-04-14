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
    echo "</tr>";
}
?>
</tbody>

<table class="table table-striped">
<thead>
    <tr>
        <th>ID</th>
        <th>Company Type</th>
        <th>Company Names</th>
        <th>Company Address</th>
        <th>Company Activity</th>
        <th>Capital Value</th>
        <th>Capital Share</th>
        <th>user ID</th>
    </tr>
</thead>
<tbody>
<h1>Companies</h1>
<?php
$query = $connection->query("SELECT * FROM companies");
while($row = mysqli_fetch_row($query)){
    echo "<tr>";
    echo "<td>".$row[0]."</td>";
    echo "<td>".$row[1]."</td>";
    echo "<td>".$row[2]."</td>";
    echo "<td>".$row[3]."</td>";
    echo "<td>".$row[4]."</td>";
    echo "<td>".$row[5]."</td>";
    echo "<td>".$row[6]."</td>";
    echo "<td>".$row[7]."</td>";
    echo "</tr>";
}
?>
</tbody>
</table>
<h1>Shareholders</h1>
<table class="table table-striped">
<thead>
    <tr>
        <th>ID</th>
        <th>shareholder name</th>
        <th>shareholder Nationality</th>
        <th>shareholder Percentage</th>
        <th>Personal ID</th>
        <th>Company ID</th>
    </tr>
</thead>
<tbody>
<?php
$query = $connection->query("SELECT * FROM shareholders");
while($row = mysqli_fetch_row($query)){
    echo "<tr>";
    echo "<td>".$row[0]."</td>";
    echo "<td>".$row[1]."</td>";
    echo "<td>".$row[2]."</td>";
    echo "<td>".$row[3]."</td>";
    echo "<td>".$row[4]."</td>";
    echo "<td>".$row[5]."</td>";
    echo "</tr>";
}
?>
</tbody>
</table>
<h1>Managers</h1>
<table class="table table-striped">
<thead>
    <tr>
        <th>ID</th>
        <th>Manager name</th>
        <th>Manager Nationality</th>
        <th>Personal ID</th>
        <th>perm1</th>
        <th>perm2</th>
        <th>perm3</th>
        <th>Manger Type</th>
        <th>Company ID</th>
    </tr>
</thead>
<tbody>
<?php
$query = $connection->query("SELECT * FROM managers");
while($row = mysqli_fetch_row($query)){
    echo "<tr>";
    echo "<td>".$row[0]."</td>";
    echo "<td>".$row[1]."</td>";
    echo "<td>".$row[2]."</td>";
    echo "<td>".$row[3]."</td>";
    echo "<td>".$row[4]."</td>";
    echo "<td>".$row[5]."</td>";
    echo "<td>".$row[6]."</td>";
    echo "<td>".$row[7]."</td>";
    echo "<td>".$row[8]."</td>";
    echo "</tr>";
}
?>