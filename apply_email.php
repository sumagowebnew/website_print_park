<?php

if(isset($_POST["btn_submit"])){
// Checking For Blank Fields..
if($_POST["job_title"]==""||$_POST["fname"]==""||$_POST["mobile_no"]==""||$_POST["address"]==""||$_POST["email"]==""||$_POST["comemail"]==""||$_POST["cv"]==""||$_POST["upcv"]==""){
echo "Fill All Fields...";

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
$subject = $_POST['job_title'];
$fname = $_POST['fname'];
$mobile_no = $_POST['mobile_no'];
$address = $_POST['address'];
$cv = $_POST['cv'];
$upcv = $_POST['upcv'];
$headers = 'From:'. $email . "rn"; // Sender's Email
$headers .= 'Cc:'. $email . "rn"; // Carbon copy to Sender
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$address = wordwrap($address, 70);
// Send Mail By PHP Mail Function
mail("pratikshamurkute31@gmail.com", $subject, $fname, $headers,$mobile_no,$address,$cv,$upcv);
echo "Your mail has been sent successfuly ! Thank you for your feedback";
}
}
}
?>


<!-- <script>
  function validate() {
   
    return true; // Return true if the form is valid, false otherwise
  }

  document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector('form[name="myForm"]');
    const modal = document.querySelector('.modal');

    form.addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent the default form submission

     
      if (validate()) {
        
        alert('Thank you for your submission!');

        
        const modalInstance = bootstrap.Modal.getInstance(modal);
        if (modalInstance) {
          modalInstance.hide();
        }

       
        form.reset();
      }
    });
  });
</script>
  <div id="success_message" style="display:none;">
  <h2>Thank you for your submission!</h2>
  -->