<?php
    if(isset($_POST['name']) != ''){
        $email = $_POST["email"];

        $email_from = "form@janprapharma.com";

        $email_subject = "New Form Submission";

        $to = "info@janpharma.com";
    
        $body = "New Subscription: $emial\n";
    

        $headers = "From: $email_from \r\n";

        mail($to,$email_subject,$body,$headers);
    }
    
    if(isset($_POST['cName']) && $_POST['cEmail'] != ''){
        $name = $_POST["cName"];
        $email = $_POST["cEmail"];
        $message = $_POST["cMessage"];

        $from_email = "form@janprapharma.com";

        $subject = "New Form Submission";

        $to = "info@janprapharma.com";
    
        $body_form = "User Name: $name.\n"."User Email: $email.\n"."Message: $message";

        $headers = "From: $from_email \r\n";

        mail($to,$subject,$body_form,$headers);
    }

    header("Location: index.html");
?>