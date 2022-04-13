<?php
require_once("header.php");
require_once ("database.php");
$database_instance = Database::getInstance();
$connection = $database_instance->getConnection(); 
if(isset($_GET["id"])){
    $id = $_GET['id'];
}
$row = array();
$user = "SELECT * FROM users WHERE id = $id";
$result_user = mysqli_query($connection, $user);
$row_user = mysqli_fetch_assoc($result_user);

$company = "SELECT * from companies where user_id = $id";
$result_company = mysqli_query($connection, $company);
$row_company = mysqli_fetch_assoc($result_company);

$company_id = "SELECT id from companies where user_id = $id";
$result_company_id = mysqli_query($connection, $company_id);
$row_company_id = mysqli_fetch_assoc($result_company_id);
$company_id = $row_company_id["id"];

$shareholders = "SELECT * from shareholders where company_id= $company_id";
$result_shareholders = mysqli_query($connection, $shareholders);
$row_shareholders = mysqli_fetch_assoc($result_shareholders);

$managers = "SELECT * from managers where company_id= $company_id";
$result_managers = mysqli_query($connection, $managers);
$row_managers = mysqli_fetch_assoc($result_managers);

$all_row = array_merge($row_user,$row_company);
$all_row = array_merge($all_row,$row_shareholders);
$all_row = array_merge($all_row,$row_managers);
echo "<pre>";
print_r($all_row);
echo "</pre>";

?>