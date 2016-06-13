<?php
/*/originally owner_email/*/
//$owner_email = $_POST["owner_email"]; 

$owner_email = 'mazazacreativesolutions@gmail.com'; //your email
$headers = 'From:' . @$_POST['email'];
$subject = 'Enquiry from the website Mazaza Creative Solutions' . @$_POST["name"];
$messageBody = "";

if (@$_POST['name']!='nope'){
    $messageBody .= 'Visitor: ' . @$_POST["name"] . "\n";
   
}
if(@$_POST['email']!='nope'){
    $messageBody .= 'Email Address: ' . @$_POST['email'] . "\n";
    
}
if(@$_POST['phone']!='nope'){        
    $messageBody .= 'Phone Number: ' . @$_POST['phone'] ."\n";
   
}   
if(@$_POST['message']!='nope'){
    $messageBody .= 'Message: ' . @$_POST['message'] ."\n";
}

if(@$_POST["stripHTML"] == 'true'){
    $messageBody = strip_tags($messageBody);
}

try{
    if(!mail($owner_email, $subject, $messageBody, $headers)){
        throw new Exception('An unexpected error occurred with the email being sent!<br />Please try again contact us directly at <a href="mailto:kmakis@mazazacreativesolutions.co.za');
    }else{
        header("location:contact-thanks.php");// create a separate page.
    }
}catch(Exception $e){
    echo $e->getMessage() ."\n";
}

?>
