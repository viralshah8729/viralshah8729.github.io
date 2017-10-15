<?php
 
    // ankit code
    
    $email_to = "viralshah8729@gmail.com";


    $name = $_POST["full_name"];
    $email_from = $_POST["email"];
    $telephone = $_POST["phone"];
    $message = $_POST["msgbox"];

    $email_subject = "Feedback from website";
    
    $headers = "From: " . $email_from . "\n";
    $headers .= "Reply-To: " . $email_from . "\n";

    $message = "Name: ". $name . "\r\nMessage: " . $message;

    ini_set("sendmail_from", $email_from);
    $sent = mail($email_to, $email_subject, $message, $headers, "-f" .$email_from);
    if ($sent)
    {
        echo "thanks";      
        header("Location: https://www.yourdomain.com/thankyou.html");
    } else {
        echo "There has been an error sending your comments. Please try later.";
    }
  

    // $ack = 0; //acknowledgment for mail sent successfully or not

    // $name = $_POST['full_name'].'<br>';
    // $email = $_POST['email'].'<br>';
    // $phone = $_POST['phone'].'<br>';
    // $subject = $_POST['msgbox'].'<br>';
    
    // //$message_data = $_POST['contactMessage'].'<br>';

    // $to = "viralshah8729@gmail.com";
    // $subject = "Intrested For Inquery";

    // $message = "<b>Name:</b>".$name."<br>";
    // $message .= "<b>Email:</b>".$email."<br>";
    // $message .= "<b>Phone</b>".$phone."<br>";
    // $message .= "<b>Message:</b>".$subject."<br>";
    // $message .= "<h1>This is headline.</h1>";

    // $header = "From:viralshah8729@gmail.com \r\n";
    // $header .= "Cc:viralshah8729@gmail.com \r\n"; //optional
    // $header .= "MIME-Version: 1.0\r\n";
    // $header .= "Content-type: text/html\r\n";

    // $retval = mail ($to,$subject,$message,$header);

    // if( $retval == true ) 
    // {
    //     echo "Message sent successfully...";
    //    // $ack = 1;
    // }
    // else 
    // {
    //     echo "Message could not be sent...";
    //      //$ack = 0;
    // }

    // //echo json_encode($ack);
    
?>


