<?php
//No.14

include '../classes/User.php';
$user = new User;
$user->update($_POST, $_FILES); //(form, photo)



?>