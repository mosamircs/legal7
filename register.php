<?php
require_once("header.php");
require_once ("database.php");
if(isset($_GET["id"])){
    $id = $_GET['id'];
}
$database_instance = Database::getInstance();
$connection = $database_instance->getConnection(); 
// global $formdata;
// $formdata = array();
// if (isset($_POST["username"])) {
//     $formdata["username"] = $_POST["username"];
// }
// if (isset($_POST["email"])) {
//     $formdata["email"] = $_POST["email"];
//     $sql = "SELECT * FROM users where email='".$formdata["email"]."'";
//     $result = $connection->query($sql);
//     $num_rows = mysqli_num_rows($result);
//     if($num_rows >= 1){
//         // echo "email exist";
//     }else{
//         $email = $formdata["email"];
//             $sql = "SELECT * FROM users where email='".$formdata["email"]."'";
//             $result = $connection->query($sql);
//     }
// }
// if (isset($_POST["phone"])) {
//     $formdata["phone"] = $_POST["phone"];
//     $sql = "SELECT * FROM users where phone='".$formdata["phone"]."'";
//     $result = $connection->query($sql);
//     $num_rows = mysqli_num_rows($result);
//     if($num_rows >= 1){
//         // echo "email exist";
//     }else{
//         $phone = $formdata["phone"];
//         $sql = "SELECT * FROM users where phone='".$formdata["phone"]."'";
//         $result = $connection->query($sql);
//     }
// }  
if (isset($_POST["username"])&&isset($_POST["email"])&&isset($_POST["phone"]) && !empty($_POST["phone"])&& !empty($_POST["username"])&&!empty($_POST["email"])) {
    $insert_user = "INSERT INTO `users` (`name`, `email`, `phone`) 
VALUES ('".$_POST["username"]."','".$_POST["email"]."', '".$_POST["phone"]."')";
    $result = $connection->query($insert_user);

    $last_id = $connection->insert_id;
    $data = array(
        'status' => 200,
        'id' => $last_id
    );
    echo json_encode($data);
    header("Content-type: application/json");
}


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require __DIR__ . '/vendor/autoload.php';
$mail = new PHPMailer(TRUE);
//user
try {
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.sendgrid.net';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'apikey';                     //SMTP username
    $mail->Password   = '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';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('info@bestlancer.com', 'The Legal Clinics');
    $mail->addAddress($_POST["email"], $_POST["name"]);     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'The Legal Clinics';
    $mail->Body    = "<h1>Established your company by  The legal clinics</h1>by this email {$_POST["email"]}";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    // echo 'Message has been sent' . "<br>";
} catch (Exception $e) {
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}" . "<br>";
}
$mail1 = new PHPMailer(TRUE);
//admin message 
try {
    $mail1->isSMTP();                                            //Send using SMTP
    $mail1->Host       = 'smtp.sendgrid.net';                     //Set the SMTP server to send through
    $mail1->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail1->Username   = 'apikey';                     //SMTP username
    $mail1->Password   = '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';                               //SMTP password
    $mail1->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail1->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail1->setFrom('info@bestlancer.com', 'The Legal Clinics');
    $mail1->addAddress('info@bestlancer.com', 'tlc');     //Add a recipient
    $mail1->SMTPDebug = true;
    //Content
    $mail1->isHTML(true);                                  //Set email format to HTML
    $mail1->Subject = 'admin';
    //if (isset($_SESSION["id"])) {
    $mail1->Body    = "<h1>admin message </h1> this email is registered {$_POST["email"]} and <a href='https://unruffled-hugle.45-76-42-208.plesk.page/show.php?id={$last_id}'>Click Here</a>";
    //}
    $mail1->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail1->send();
    // echo 'Message has been sent' . "<br>";
} catch (Exception $e) {
    // echo "Message could not be sent. Mailer Error: {$mail1->ErrorInfo}" . "<br>";
}
?>


