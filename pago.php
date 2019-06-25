<?php

require "class.phpmailer.php";
require "class.smtp.php";


try {
    $email_user = "josegagelvis@gmail.com";
    $email_password = "debianmysql1225++";
    $the_subject = "Phpmailer prueba by jagelvisr.github.io";
    $address_to = "josegagelvis@gmail.com";
    $from_name = "Jagelvis1";
    $phpmailer = new PHPMailer();
    // ---------- datos de la cuenta de Gmail -------------------------------
    $phpmailer->Username = $email_user;
    $phpmailer->Password = $email_password; 
    //-----------------------------------------------------------------------
    // $phpmailer->SMTPDebug = 1;
    $phpmailer->SMTPSecure = 'ssl';
    $phpmailer->Host = "smtp.gmail.com"; // GMail
    $phpmailer->Port = 465;
    $phpmailer->IsSMTP(); // use SMTP
    $phpmailer->SMTPAuth = true;
    $phpmailer->setFrom($phpmailer->Username,$from_name);
    $phpmailer->AddAddress($address_to); // recipients email
    $phpmailer->Subject = $the_subject;	
    $phpmailer->Body .="<h1 style='color:#3498db;'>Hola Mundo!</h1>";
    $phpmailer->Body .= "<p>Mensaje personalizado</p>";
    $phpmailer->Body .= "<p> " .$_POST["paqueteN"]. " </p>";
    $phpmailer->Body .= "<p> " .$_POST["precioTotal"]. " </p>";
    $phpmailer->Body .= "<p> " .$_POST["token"]. " </p>";
    $phpmailer->Body .= "<p> " .$_POST["tokenEmail"]." </p>";
    $phpmailer->Body .= "<p>Fecha y Hora: ".date("d-m-Y h:i:s")."</p>";
    $phpmailer->IsHTML(true);
    $phpmailer->Send();

}catch (Exception $exception){
    echo "Algo salio muy mal", $exception->getMessage();
}

?>