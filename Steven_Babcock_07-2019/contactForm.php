<?php
//need a php form for mail, subject, and message
//unsure how to make fields "required"
if (isset($_POST['submit'])) {
   $mailForm = $_POST['mail'];
   $subject = $_POST['subject'];
   $message = $_POST['message'];
   // cannot use gmail email addresses so will use Ryans Email
   $mailTo = "Sbabcock20@gmail.com";
   //breaks down how the recived email will display
   $headers = "From: ".$mailForm;
   $txt = "You have recived an Email form ".$mailForm.".\n\n".$message;

   mail($mailTo, $subject, $txt, $headers);
   header("Location: index.php?mailsend");
}