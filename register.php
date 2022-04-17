<?php
require_once("header.php");
require_once ("database.php");
if(isset($_GET["id"])){
    $id = $_GET['id'];
}
$database_instance = Database::getInstance();
$connection = $database_instance->getConnection(); 
global $formdata;
$formdata = array();
if (isset($_POST["username"])) {
    $formdata["username"] = $_POST["username"];
}
if (isset($_POST["email"])) {
    $formdata["email"] = $_POST["email"];
    $sql = "SELECT * FROM users where email='".$formdata["email"]."'";
    $result = $connection->query($sql);
    $num_rows = mysqli_num_rows($result);
    if($num_rows >= 1){
        // echo "email exist";
    }else{
        $email = $formdata["email"];
            $sql = "SELECT * FROM users where email='".$formdata["email"]."'";
            $result = $connection->query($sql);
    }
}
if (isset($_POST["phone"])) {
    $formdata["phone"] = $_POST["phone"];
    $sql = "SELECT * FROM users where phone='".$formdata["phone"]."'";
    $result = $connection->query($sql);
    $num_rows = mysqli_num_rows($result);
    if($num_rows >= 1){
        // echo "email exist";
    }else{
        $phone = $formdata["phone"];
        $sql = "SELECT * FROM users where phone='".$formdata["phone"]."'";
        $result = $connection->query($sql);
    }
}  
if (isset($formdata["username"])&&isset($formdata["email"])&&isset($formdata["phone"])) {
    $insert_user = "INSERT INTO `users` (`name`, `email`, `phone`) 
VALUES ('".$formdata["username"]."','".$formdata["email"]."', '".$formdata["phone"]."')";
    $result = $connection->query($insert_user);

    $last_id = $connection->insert_id;
    $data = array(
        'status' => 200,
        'id' => $last_id
    );
    echo json_encode($data);
    header("Content-type: application/json");
    exit();
}


//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;
//use PHPMailer\PHPMailer\SMTP;
//
//require __DIR__ . '/vendor/autoload.php';
//$mail = new PHPMailer(TRUE);
////user
//try {
//$mail->isSMTP();                                            //Send using SMTP
//$mail->Host       = 'smtp.sendgrid.net';                     //Set the SMTP server to send through
//$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
//$mail->Username   = 'apikey';                     //SMTP username
//$mail->Password   = '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';                               //SMTP password
//// $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
//$mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
//
////Recipients
//$mail->setFrom('rmahmoud@thelegalclinics.com', 'The Legal Clinics');
//// $mail->addAddress($_SESSION["email"], $_SESSION["name"]);     //Add a recipient
//// $mail->setFrom('mosamircs@gmail.com', 'The Legal Clinics');
//$mail->addAddress($formdata["email"], $formdata["username"]);     //Add a recipient
//
////Content
//$mail->isHTML(true);                                  //Set email format to HTML
//$mail->Subject = 'The Legal Clinics';
//$mail->Body    = "<h1>Established your company by  The legal clinics</h1>by this email {$formdata["email"]}";
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
//
//$mail->send();
//// echo 'Message has been sent' . "<br>";
//} catch (Exception $e) {
//// echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}" . "<br>";
//}
//$mail1 = new PHPMailer(TRUE);
////admin message
//try {
//$mail1->isSMTP();                                            //Send using SMTP
//$mail1->Host       = 'smtp.sendgrid.net';                     //Set the SMTP server to send through
//$mail1->SMTPAuth   = true;                                   //Enable SMTP authentication
//$mail1->Username   = 'apikey';                     //SMTP username
//$mail1->Password   = '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';                               //SMTP password
//// $mail1->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
//$mail1->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
//
////Recipients
//$mail1->setFrom('rmahmoud@thelegalclinics.com', 'The Legal Clinics');
//$mail1->addAddress('rmahmoud@thelegalclinics.com', 'tlc');     //Add a recipient
//
////Content
//$mail1->isHTML(true);                                  //Set email format to HTML
//$mail1->Subject = 'admin';
////if (isset($_SESSION["id"])) {
//$mail1->Body    = "<h1>admin message </h1> this email is registered {$formdata["email"]} and <a href='http://localhost/show.php?id={$last_id}'>Click Here</a>";
////}
//$mail1->AltBody = 'This is the body in plain text for non-HTML mail clients';
//
//$mail1->send();
//// echo 'Message has been sent' . "<br>";
//} catch (Exception $e) {
//// echo "Message could not be sent. Mailer Error: {$mail1->ErrorInfo}" . "<br>";
//}
?>


