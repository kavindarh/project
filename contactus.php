<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<base href="http://datasource.net" />


<?php




if ($_GET["action"]=="post")

{
$str=$str  ." User Details from Contact us page<br><Br>";

$str= $str . "Full Name: ". $_POST["textfield"] ."<br><Br>";

$str= $str . "Phone :" . $_POST["textfield2"] ."<br><Br>";

$str= $str . "Email : " . $_POST["textfield3"] ."<br><Br>";

$str= $str . "Country : " . $_POST["textfield4"] . "<br><Br>";

$str= $str . "Service: " . $_POST["service"] . "<br><Br>";

if ($_POST["frmSubmit"] == "1")

	$str= $str . "User has requested to contact him as soon as possible regarding this matter <br><Br>";

$str= $str . "<br><BR><Br>";

$str= $str . "Thanks<br><Br>";

$str= $str . "<Br><br>Providence Team";

$subject="Contact us Form";

$recipient  = 'chiragvels@gmail.com' . ', '; // note the comma
$recipient .= 'chirag@ecreatorz.com';

$header = "From: ".$_POST["textfield"]."<".$_POST["textfield3"].">\r\n "; //optional headerfields

//$header = "From: <>\r\n "; //optional headerfields

$header .= "MIME-Version: 1.0\r\n";

$header .= "Content-Type: text/html; charset=ISO-8859-1\r\n";



mail($recipient, $subject, $str, $header);
}


?>



</body>

</html>

