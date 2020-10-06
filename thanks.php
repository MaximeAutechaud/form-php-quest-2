<?php

var_dump($_POST);

if (!empty($_POST) && isset($_POST['btn'])) {

   $lastname = trim($_POST['user_lastname']);
   $firstname = trim($_POST['user_firstname']);
   $phone = trim($_POST['user_phone']);
   $mail = trim($_POST['user_mail']);
   $subject = trim($_POST['subject']);
   $message = trim($_POST['user_message']);
   $errors = [];

   if (empty($firstname))
    $errors['user_firstname'] = 'Le prénom est requis';
   if (empty($lastname))
    $errors['user_lastname'] = 'Le nom est requis';
   if (empty($phone))
    $errors['user_phone'] = 'Le n° de tel est requis';
   if (empty($mail) && !filter_var($mail, FILTER_VALIDATE_EMAIL))
    $errors['user_mail'] = 'Le mail est requis';
   if (empty($subject))
    $errors['subject'] = 'Le sujet est requis';
   if (empty($message))
    $errors['user_message'] = 'Le message est requis';

   var_dump($errors);

   if (empty($errors)) {
    echo "Merci " . $firstname . " " . $lastname . " de nous avoir contacté à propos de " . $subject . ". Un de nos conseillers vous recontactera soit à l'adresse " . $mail . " ou par téléphone au " . $phone . " dans les plus brefs délais pour traiter votre demande : " . $message;
   } else {
    foreach ($errors as $input => $message) {
     if (isset($errors['user_firstname'])) {
      echo $message;
     } elseif (isset($errors['user_lastname'])) {
      echo $message;
     } elseif (isset($errors['user_phone'])) {
      echo $message;
     } elseif (isset($errors['user_mail'])) {
      echo $message;
     } elseif (isset($errors['subject'])) {
      echo $message;
     } elseif (isset($errors['user_message'])) {
      echo $message;
     }
    }
   }
}