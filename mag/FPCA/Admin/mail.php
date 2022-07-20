<?php
include "db_conn.php";//connection file
require "PHPMailerAutoload.php";// it will be in PHPMailer
require "class.smtp.php";// it will be in PHPMailer
require "class.phpmailer.php";// it will be in PHPMailer


$response = array();
$params = json_decode(file_get_contents("php://input"));

if(!empty($params->email_id)){

    $email_id = $params->email_id;
    $flag=false;
    echo "something";
    if(!filter_var($email_id, FILTER_VALIDATE_EMAIL))
    {
        $response['ERROR']='EMAIL address format error'; 
        echo json_encode($response,JSON_UNESCAPED_SLASHES);
        return;
    }
    $sql="SELECT * from sales where email_id ='$email_id' ";

    $result = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);

    $to = "demo@gmail.com";
    $subject = "DEMO Subject";
    $messageBody ="demo message .";

    if($count ==0){
        $response["valid"] = false;
        $response["message"] = "User is not registered yet";
        echo json_encode($response);
        return;
    }

    else {

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; // authentication enabled
        $mail->IsHTML(true); 
        $mail->SMTPSecure = 'ssl';//turn on to send html email
        // $mail->Host = "ssl://smtp.zoho.com";
        $mail->Host = "p3plcpnl0749.prod.phx3.secureserver.net";//you can use gmail 
        $mail->Port = 465;
        $mail->Username = "demousername@example.com";
        $mail->Password = "demopassword";
        $mail->SetFrom("demousername@example.com", "Any demo alert");
        $mail->Subject = $subject;

        $mail->Body = $messageBody;
        $mail->AddAddress($to);
        echo "yes";

        if(!$mail->send()) {
           echo "Mailer Error: " . $mail->ErrorInfo;
       } 
       else {
           echo "Message has been sent successfully";
      }
    }

}
else{
    $response["valid"] = false;
    $response["message"] = "Required field(s) missing";
    echo json_encode($response);
}


?>