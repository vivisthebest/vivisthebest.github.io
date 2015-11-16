<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: veevs-site'; 
    $to = 'vivyee@bu.edu'; 
    $subject = 'Hello';
    $human = $_POST['human'];

    $body = "From: $name\nEMail: $email\nMessage:\n$message";

    if (isset($_POST['send'])) {
       if ($name != '' && $email != '' && $human == 4) {
            if (mail ($to, $subject, $body, $from)) { 
               //echo '<p>Your message has been sent!</p>';
               header('Location:contact-veev.php?done=1');
            } else { 
                header('Location:contact-veev.php?done=2');
               //echo '<p>Something went wrong, go back and try again!</p>'; 
           } 
       } else if ($name != '' && $email != '' && $human != '4') {
            header('Location:contact-veev.php?done=3');
           //echo '<p>You answered the antispam question incorrectly!</p>';
       } else {
            header('Location:contact-veev.php?done=4');
           //echo '<p>You need to fill in all required fields!!</p>';
       }
   } 
?>