<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Untitled</title>
</head>

<body>

<?php
$to = "bcairns@voidrealms.com";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "santa@northpole.com";
$headers = "From:" . $from;

if(mail($to,$subject,$message,$headers))
{
	echo "Mail Sent.";
}
else
{
	echo "Mail bad.";
}

?>

</body>
</html>
