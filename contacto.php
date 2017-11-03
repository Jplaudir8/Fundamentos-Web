<?php if(isset($_POST['name']) && isset($_POST['email'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$to = 'joanperezl123@gmail.com'
$subject = "AutoRace - Servicio al Cliente"
$body = '<html>
  <body>
    <h2>Feedback - Respuesta de Autorace</h2>
    <hr>
    <p>Nombre <br>'.$name.'</p>
    <p>Email <br>'.$email.'</p>
  </body>
</html>';
//Headers
$headers = "From: ".$name." <".$email.">\r\n";
$headers .= "Reply-to: ".$email."\r\n";
$headers .= "Mine-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset-utf-8";
//send
$send = mail($to, $subject, $body, $headers);
if($send) {
  echo '<br>';
  echo 'Thanks for contacting me. I will be with you shortly.';
} else {
  echo 'error';
}
}
?>
