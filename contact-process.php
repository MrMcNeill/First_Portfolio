<pre><?php
var_dump($_POST);
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$email_body = "";

$email_body = $email_body . "Name: " . $name . "\n";
$email_body = $email_body . "E-mail: " . $email . "\n";
$email_body = $email_body . "Message " . $message . "\n";
echo $email_body;

?></pre>