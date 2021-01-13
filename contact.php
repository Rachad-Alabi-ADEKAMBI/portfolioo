<?php
if (isset($_POST) AND isset($_POST["user_name"]) AND isset($_POST["user_mail"]) AND isset($_POST["user_query"]) AND isset($_POST["user_message"]))
{
   extract($_POST);
   if(!empty($user_name) AND !empty($user_mail) AND !empty($user_query) AND !empty($user_message))
   {  
      $user_message= str_replace("\'","'", $user_message);
      $receiver= "adekambirachad@gmail.com";
      $query="Formulaire de contact";
      $message="Une nouvelle question \n
      Nom: $user_name \n
      Email: $user_mail \n
      Objet: $user_query \n
      Message: $user_message";
      $heading="From: $user_name \n Reply-To $user_mail";
      mail($receiver, $query, $message, $heading);
      echo"Le mail a bien été envoyé.";
   }
   else{
      echo"Vous n'avez pas rempli tous les champs !!!";
   }
}

?>