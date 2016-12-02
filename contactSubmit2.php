<?php 

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

$formcontent = "You have received a Logistics contact from Vobecky.com! \n 
Name: $first_name $last_name \n Phone: $phone \n Email: $email \n
Message: $message";
$recipient = "satthajaroon@gmail.com";
$subject = "Contact Form - from Vobecky Website";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
?>

<script>
alert("Thank you for contacting us! We will be in touch shortly!");
window.location.replace("http://vobecky.com/VobeckySite2/logistics-contact.php");
</script>