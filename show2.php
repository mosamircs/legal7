<?php
require_once("header.php");
require_once ("database.php");
$database_instance = Database::getInstance();
$connection = $database_instance->getConnection(); 
if(isset($_GET["id"])){
    $id = $_GET['id'];
}
$rows = array();
$users = "SELECT users.name,users.email,users.phone,companies.company_type,companies.company_name,companies.company_address,companies.company_activity,companies.capital_share,companies.capital_value,shareholders.shareholder_name,shareholders.shareholder_nationality,shareholders.shareholder_percenatage,shareholders.shareholder_personal_id,managers.manager_name,managers.manager_nationality,managers.manager_personal_id,managers.perm1,managers.perm2,managers.perm3,managers.manager_type FROM users where users.id = $id INNER JOIN companies on users.id = companies.user_id INNER JOIN shareholders on companies.id = shareholders.company_id INNER JOIN managers on  companies.id = managers.company_id";

$result_user = mysqli_query($connection, $users);
while($r = mysqli_fetch_assoc($result_user)) {
    $rows[] = $r;
}
echo "<pre>";
var_dump($rows);
echo "</pre>";
