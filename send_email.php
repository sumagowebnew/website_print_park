<?php

if(isset($_POST["submit"])){
// Checking For Blank Fields..
if($_POST["name"]==""||$_POST["email"]==""||$_POST["phone"]==""||$_POST["website"]==""||$_POST["message"]==""){
echo "<script>;";
echo "alert('Fill All Fields..');";
echo "</script>;";

}else{
// Check if the "Sender's Email" input field is filled out
$email=$_POST['email'];
// Sanitize E-mail Address
$email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email){
echo "Invalid Sender's Email";
}
else{
$subject = $_POST['website'];
$message = $_POST['message'];
$headers = 'From:'. $email . "rn"; // Sender's Email
$headers .= 'Cc:'. $email . "rn"; // Carbon copy to Sender
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
mail("pratikshamurkute31@gmail.com", $subject, $message, $headers);
echo "Your mail has been sent successfuly ! Thank you for your feedback";
}
}
}
?>