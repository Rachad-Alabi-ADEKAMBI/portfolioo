<?php
if (isset($_POST["submit"])){
   if (isset($_POST["user_name"]) AND isset($_POST["user_mail"]) AND isset($_POST["subject"]) AND isset($_POST["user_message"]))
   extract($_POST);
   if (!empty($_POST["user_name"]) AND !empty($_POST["user_mail"]) AND !empty($_POST["subject"]) AND !empty($_POST["user_message"])){
               $message = str_replace ("\'", "'", $user_message);
               $destinataire = "adekambirachad@gmail.com";
               $sujet = "formulaire de contact";
               $message = "un nouveau message \n 
               Nom: $user_name \n
               Email: $user_mail \n
               Message: $user_message";
               $header = "from $user_mail \n Reply-To: $user_mail";
                mail($destinataire, $sujet, $message, $header);
                echo "Le mail a bien été envoyé !<br>";
            }
            else{
               echo "Vous n'avez pas rempli tous les champs !";
            }
}
?>