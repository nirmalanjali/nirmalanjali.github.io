<?php
$Email = Trim(stripslashes($_POST['Email'])); // Collecting the users email
$EmailTo = "aaron2nj@gmail.com"; // Your email address to receive the message.
$Subject = Trim(stripslashes($_POST['Option'])); // Subject of the email
$Name = Trim(stripslashes($_POST['Name'])); // Collecting the users Name

// If statement checking whether the users email is valid
if (strpos($Email, '@') === false && strpos($Email, '.') === false) {
header("Location: https://nirmalanjali.github.io/#contact"); // Web address of your contact page
exit();
}

$Message = Trim(stripslashes($_POST['Message'])); // Collecting users message

// Validation
$validationOK=true;
if (!$validationOK) {
print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
exit;
}

// Prepare email body text.
// Can be concatenated but this is easier to read.
$Body = "";
$Body .= "Hello";
$Body .= "/n";
$Body .= "Thank you for contacting us. We have received your message and we aim to get back to you as soon as possible.";
$Body .= "Your enquiry: ";
$Body .= "\n";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// Function to send the email.
// Attached to a variable so it can it can be checked in an if statement later.
$success = mail($EmailTo, $Subject, $Body, "From: <$Email>");

// If statement to check if the email was sent.
// Redirect to the url you will enter on line 47 instead of the #.
if ($success){
print "<meta http-equiv=\"refresh\" content=\"0;URL=https://nirmalanjali.github.io/#connect\">";
}
else{
print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}

?>
