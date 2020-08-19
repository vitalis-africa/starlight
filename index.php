<?php header( 'Location: /index.html' ) ;  ?>




if (isset($_POST['submit'])) {
    $fname = $_REQUEST["fname"];
    $lname = $_REQUEST["lname"];
    $email = $_REQUEST["email"];
    $message = $_REQUEST["message"];

    $to = "salie@gmail.com";
    $subject = "Starlight-ke";
    $message="First Name: ".$fname."\n"."Last Name:"."$lname."\n". "wrote the following: "."\n\n".$msg
    $headers="From: ".$email;

    if (mail($to, $subject, $message, $headers)){
        echo "<h1>Send success! Thank you🎇"."".$name.",We will contact you shortly</h1>";
    }
    else {
        echo "something went wrong";
    }
?>
