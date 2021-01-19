<?php
    // Name: Ryan Christopher
    // Pawprint: rdcb2f
    // Date: December 11, 2020
    // Final Project

    // Code found from https://www.w3schools.com/php/func_mail_mail.asp

    $mail = $_POST['email'];

    $msg = "Thank you for providing your email for us to contact you. We look forward to meeting you in person";
    $msg = wordwrap($msg,70);

    mail($mail,"Phi Delta Theta MO Alpha",$msg);

    require "Login_Final.php";
?>