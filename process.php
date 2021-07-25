<?php
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "register.greenmap@gmail.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    //send email
    mail($admin_email, "új  feliratkozó", $message . ' - ' . $phone, "From:" . $email);
    
  
  } ?>