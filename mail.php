
<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$phNum= $_POST('phNum');
$message= $_POST['message'];
$to = "beinghrick@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>