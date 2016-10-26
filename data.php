
<?php
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "info";
 
 // Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);


$name    = $_GET['name1'];
$email   = $_GET['email1'];

$query   = "INSERT into subscribers (NAME,EMAIL) VALUES('" . $name . "','" . $email . "')";
$success = $conn->query($query);

//MAIL
 $msg = '<html>
<body style="font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif; ">
<div style="background-color:#ECECEC;padding: 10px 35px 10px 35px;color:#6C7A89;"><h2>CODEBUZZ<br><span style ="font-size:0.8em; color:#95A5A6">One letter every info
</span></h2></div>
<div style="border-style:solid; border-left-width:35px; border-right-width:35px; border-color:#ECECEC;">
<p style="padding: 30px 25px 30px 25px; font-size:1.5em;">Hey '. $name .
',<br><br>
Hope you are doing well. Thank you for subscribing to our newsletter. Through codebuzz, we will keep you informed about all the upcoming coding contests, hackathons etc. of the week and will ensure you choose the right thing to participate in without missing anything.<br><br>Keep up the coding spirit.<br>Stay informed and keep growing.</p>
<br><p style="text-align:center;font-size:2.0em;padding: 0px 25px 30px 25px;">Learn | Code | Grow</p>
<p style="padding: 30px 25px 30px 25px; font-size:1.5em;">Regards,<br>
Team CodeBuzz</p></div>
<footer style="background-color:#ECECEC;text-align:center;;padding: 1px 50px 10px 50px;color:#95A5A6;font-size:1.25em;">
<br>
To view the complete details of contests, <a href="http://ec2-54-191-122-222.us-west-2.compute.amazonaws.com/dashboard.php" style="text-decoration:none;">click here.</a><br>                     

You are receiving this email because you are subscribed to our 
newsletter. To unsubscribe and stop receiving emails from us   
drop an email at - <small>unsubscribe@codebuzz.ind.in</small> <br>                                                                      
For queries and other information, contact us at - <small>reach-us@codebuzz.ind.in</small><br>
</footer>
</body>
</html>';
//mailcode
require_once 'libs/PHPMailer/PHPMailerAutoload.php';
$m = new PHPMailer();
$m->isSMTP();
$m->SMTPAuth = true;

$m->Host = 'smtp.zoho.com';
$m->Username = 'no-reply@codebuzz.ind.in';
$m->Password = 'scor.pion';
$m->SMTPSecure = 'ssl';
$m->Port = '465';
$m->isHTML(true);
$m->From = 'no-reply@codebuzz.ind.in';
$m->FromName = 'CodeBuzz Team';
$m->addReplyTo('contact-us@codebuzz.ind.in');
$m->addAddress($email);

$m->Subject = 'CodeBuzz Team';
$m->Body = $msg;

$m->AltBody = $msg;

 if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}

if($m->send());
 { header('Location: thankyou.htm ');
   exit;
 } 
 
 
 
$conn->close();
 
 
?>
