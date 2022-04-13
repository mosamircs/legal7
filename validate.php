<?php
require_once('header.php');
require_once('database.php');

//////////////////////// Database instance ////////////////////////////////
$database_instance = Database::getInstance();
$connection = $database_instance->getConnection();

function test_input($data) {
      
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
   
if ($_SERVER["REQUEST_METHOD"]== "POST") {
      
    $adminname = test_input($_POST["adminname"]);
    $password = test_input($_POST["password"]);
    $stmt = $connection->prepare("SELECT * FROM admin_login");
    $stmt->execute();
    $resultSet = $stmt->get_result();
    $users = $resultSet->fetch_all();
    foreach($users as $user) {     
        if(($user[1] == $adminname) && ($user[2] == $password)) {
                header("Location: adminpanel.php");
        }
        else {
            echo "<script language='javascript'>";
            echo "alert('WRONG INFORMATION')";
            echo "</script>";
            die();
        }
    }
}
?>