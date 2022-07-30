<?php 
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$website=$_POST['website'];
$message=$_POST['message'];


if(!empty($email) && !empty($message)){
if(filter_var($email,FILTER_VALIDATE_EMAIL)){
$recieveir="khaledelsaeed18@gmail.com";
$subject="from: $name <$email>";
$body="name:$name \n email: $email \n phone: $phone \n website: $website \n message: $message \n regards, $name ";
$sender="from: $email";

// // Please specify your Mail Server - Example: mail.yourdomain.com.
// ini_set("SMTP","localhost");//Cambien mail.cantv.net Por localhost ... ojo, ojo OJO

// ini_set("smtp_port",25);

// ini_set("sendmail_from","khaledelsaeed18@gmail.com");

if(mail($recieveir,$subject,$body,$sender)){
    echo "your message has been send";
}else{
    echo "sorry failed to send your message..";
}
}else{
    echo "enter avaliud email address";
}
}else{
    echo "email and password field is required! ";
}