<?php
        session_start();
        $name = $_POST['name'];
        $visitor_name = $_POST['email'];
        $message = $_POST['message'];
        $_SESSION["check"] = 0;

        if (!empty($name) && !empty($visitor_name) && !empty($message)) {
          $_SESSION["check"] = 1;
          $email_form = 'email@example.com';
          $email_subject = "Message Site CBG Peinture";
          $email_body = "Sujet: $name.\n".
                          "User Emails: $visitor_name.\n".
                                  "User Message: $message.\n";

          $to = "email@example.com";

          $headers = "From: $email_form \r\n";

          mail($to, $email_subject, $email_body, $headers);
        }
        if (empty($name) || empty($visitor_name) || empty($message)) {
           $_SESSION["check"] = 2;
        }



        header("Location: index.html");

?>
