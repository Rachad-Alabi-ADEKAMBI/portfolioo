<?php
if (isset($_POST) && isset ($_POST["user_name"]) && isset ($_POST["user_mail"]) && isset ($_POST["message"])){
    extract($_POST);
    if (!empty($user_name) && !empty($user_mail) && !empty($message)){
        echo $message;
    }
}
?>