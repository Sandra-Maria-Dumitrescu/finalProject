<?php
if(filter_has_var(INPUT_POST, 'submit')){

    $name    = htmlspecialchars($_POST["name"]);
    $email   = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    if (!empty($name) && !empty($email) && !empty($message)){
        if(filter_var($email,FILTER_VALIDATE_EMAIL) === false){
            echo "bad email";
        } else{
            $email_to = "happy_pets@yahoo.com";
            $subject  = "New message from " . $name;
            $body     = "<h2>Contact request</h2>";
            $headers  = "MIME-Version: 1.0" ."\r\n";
            $headers .= "Contact_Type: text/HTML; charset:UTF-8" . "\r\n";
            $headers .= "from: " . $name . "<" . $email . ">" . "\r\n";

            if(mail($email_to, $subject, $body, $message)){
                echo "email sent";
            } else{
                echo "error, email not sent";
            }
        }
    }else{
        echo "errrrroooorrrr";
    }

}