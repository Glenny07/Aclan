<?php
 
$to = "inquiry@aclancpas.com";
$subject = $_POST['subject'];
$message = "Name: ". $_POST['name']."\n".
           "Email: <".$_POST['email'].">\n\n".
           $_POST['message'];
$headers = "From: ".$_POST['email'];
$sent= mail($to, $subject, $message, $headers);

if ($sent) {
  echo "<script>confirm('Your message sent successfully, we will get back to you soon.')</script>";
}else{
  echo "<script>confirm('We encountered an error sending an email, please try again later.')</script>";
}
?>
<script>
    window.history.back();
</script>