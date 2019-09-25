<?php

$pagename = $_POST['pagename'];
//$to = "Bobby@activeentitiesconsulting.com";
$to = "sakthi@webapiguru.com";

$subject = "FREE CONSULTATION";

$message =
    '
<html lang="en">
<head>
<title>FREE CONSULTATION</title>
<style>

table{
border: 1px solid #ccc;
}
td{
padding: 5px;
border: 1px solid #ccc;
}
p{
	font-weight: bold;
	color: #6d6e71;
}
</style>
</head>
<body>
<p>Hey! I would like to discuss a free consultation with Active Entities Consulting.</p>
<p>Looking forward to connecting with one of your expert advisors very soon.</p>
<table>
<tr>
<td>Category</td>
<td>"' .
    $_POST["category"] .
    '"</td>
</tr>
<tr>
<td>Name</td>
<td>"' .
    $_POST["name"] .
    '"</td>
</tr>
<tr>
<td>Email</td>
<td>"' .
    $_POST["email"] .
    '"</td>
</tr>

<tr>
<td>Phone Number</td>
<td>"' .
    $_POST["phoneNumber"] .
    '"</td>
</tr>

</table>
</body>
</html>
';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$headers .=
    "From: " . $_POST["email"] . "" . "\r\n" . "CC: " . $_POST["email"] . "";

if (mail($to, $subject, $message, $headers)) {
    header("location: " . $pagename . "?msg=1#contactform");
} else {
    header("location: " . $pagename . "?msg=0#contactform");
}
?>
