<?php
$mailto = ".........";
$subject = "Modulo contatti";
$redirect = "http://www..................";
$body .= "email: " . trim(stripslashes($_POST["email"])) . "\n";
  $body .= "telefono: " . trim(stripslashes($_POST["telefono"])) . "\n";
  $body .= "oggetto: " . trim(stripslashes($_POST["oggetto"])) . "\n";
  $body .= "testo: " . trim(stripslashes($_POST["testo"])) . "\n";
$headers = "Modulo Contatti";
if (empty($_POST[testo])) {
echo "ERRORE: non hai completato i campi richiesti o non &egrave; stato possibile inviare il messaggio-->TORNA INDIETRO";
exit(); }
else {
@mail($mailto, $subject, $body);
header("location: $redirect");
}
?> 
