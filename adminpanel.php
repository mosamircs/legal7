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
<table class = "table table-striped">
<thead>
    <tr >
        <th >ID</th>
        <th >Full Name</th>
        <th >Email</th>
        <th >Phone</th>
        <th >Created at</th>
        <th >Sign Date</th>
        <th >Company Type</th>
        <th >Company Names</th>
        <th >Company Address</th>
        <th >Company Activity</th>
        <th >Capital Value</th>
        <th >Capital Share</th>
        <th >shareholder name</th>
        <th >shareholder Nationality</th>
        <th >shareholder Percentage</th>
        <th >Shareholder Personal ID</th>
        <th >Manager name</th>
        <th >Manager Nationality</th>
        <th >Manager Personal ID</th>
        <th >perm1</th>
        <th >perm2</th>
        <th >perm3</th>
        <th >Manger Type</th>
    </tr>
</thead>
<tbody>
<?php
require_once("header.php");
require_once ("database.php");
$database_instance = Database::getInstance();
$connection = $database_instance->getConnection(); 
// $users = "SELECT users.id,users.name,users.email,users.phone,users.date,users.signdate,companies.company_type,companies.company_name,companies.company_address,companies.company_activity,companies.capital_share,companies.capital_value,shareholders.shareholder_name,shareholders.shareholder_nationality,shareholders.shareholder_percenatage,shareholders.shareholder_personal_id,managers.manager_name,managers.manager_nationality,managers.manager_personal_id,managers.perm1,managers.perm2,managers.perm3,managers.manager_type FROM users LEFT JOIN companies on users.id = companies.user_id LEFT  JOIN shareholders on companies.id = shareholders.company_id LEFT  JOIN managers on  companies.id = managers.company_id";
$users  = "SELECT us.* ,com.*,share.*,manag.* from users us,companies com,shareholders share,managers manag where us.id = com.user_id and com.id = share.company_id and com.id = manag.company_id";
$result_user = mysqli_query($connection, $users);

while($r = mysqli_fetch_assoc($result_user)) {
    echo "<tr>";
    echo "<td>".$r["id"]."</td>";
    echo "<td>".$r["name"]."</td>";
    echo "<td>".$r["email"]."</td>";
    echo "<td>".$r["phone"]."</td>";
    echo "<td>".$r["date"]."</td>";
    echo "<td>".$r["signdate"]."</td>";
    echo "<td>".$r["company_type"]."</td>";
    echo "<td>".$r["company_name"]."</td>";
    echo "<td>".$r["company_address"]."</td>";
    echo "<td>".$r["company_activity"]."</td>";
    echo "<td>".$r["capital_value"]."</td>";
    echo "<td>".$r["capital_share"]."</td>";
    echo "<td>".$r["shareholder_name"]."</td>";
    echo "<td>".$r["shareholder_nationality"]."</td>";
    echo "<td>".$r["shareholder_percenatage"]."</td>";
    echo "<td>".$r["shareholder_personal_id"]."</td>";
    echo "<td>".$r["manager_name"]."</td>";
    echo "<td>".$r["manager_nationality"]."</td>";
    echo "<td>".$r["manager_personal_id"]."</td>";
    echo "<td>".$r["perm1"]."</td>";
    echo "<td>".$r["perm2"]."</td>";
    echo "<td>".$r["perm3"]."</td>";
    echo "<td>".$r["manager_type"]."</td>";
    echo "</tr>";

}
?>
<script src="js/popper.min.js"></script>
<script src="js/jquery.min.js"></script>
</body>
</html>
