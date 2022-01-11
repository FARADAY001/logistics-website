<?php
if(isset($_POST['submit'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "adreseauxinf@gmail.com";
    $email_subject = "NK logistics";
 
    function died($error) {
        // your error code can go here
        echo "Nous sommes désolés, mais le formulaire que vous avez soumis comportait une ou plusieurs erreurs. ";
        echo "Ces erreurs apparaissent ci-dessous.<br /><br />";
        echo $error."<br /><br />";
        echo "Veuillez revenir en arrière et corriger ces erreurs.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('Nous sommes désolés, mais il semble y avoir un problème avec le formulaire que vous avez soumis.');       
    }
 
     
 
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'L\'adresse électronique que vous avez saisie ne semble pas être valide.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'Le prénom que vous avez saisi ne semble pas être valide.<br />';
  }
 
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'Le nom de famille que vous avez saisi ne semble pas être valide.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'Les commentaires que vous avez saisis ne semblent pas être valides.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
<?php
    $response1 = "Merci de nous avoir contactés. Nous serons en contact avec vous très bientôt.";
	header("location: contact.php?response1=".$response1."");
?>

 
<?php
 
}
?>