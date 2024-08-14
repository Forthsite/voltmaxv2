<?php
  $name = $_POST["jmeno"];
  $surname = $_POST["prijmeni"];
  $email = $_POST["email"];
  $tel = $_POST["telefon"];
  $message = $_POST["zprava"];
  
  $to = "vladanmajkut@3menergy.cz";
  $subject = "Nova zprava z webu voltmax.cz";
  $body = 
  "Jméno: $name $surname\n
  Email: $email\n
  Telefon: $tel\n
  Zpráva: $message";
  $headers = "from: noreply@voltmax.cz \n";
  // $headers .= "X-mailer: phpWebmail \n";
if( mail($to, $subject, $body, $headers) ){
  header("Location: https://www.voltmax.cz");
}
else
  {echo "CHYBA - odeslání se nepovedlo";}
?>