$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "petetoledo123@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@incandescent-heliotrope-2d5f8d.netlify.app/" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
